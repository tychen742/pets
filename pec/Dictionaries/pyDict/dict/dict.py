#!/usr/bin/env python
#-------------------------------------------------
# this is a program that utilize the library of xdict.
# Made by Daniel Gau <plateau@wahoo.com.tw>
#-------------------------------------------------


from gtk import *
from GDK import *
from string import split,replace,strip,lstrip,find,lower
import GtkExtra
import sys,os


prop = [" "," "," ","<<形容詞>>","<<副詞>>","art. ","<<連接詞>>","int.  ","<<名詞>>"," "," ","num. ", 	"prep. "," ","pron.  ","<<動詞>>","<<助動詞>>","<<非及物動詞>>","<<及物動詞>>","vbl. "," ","st. ", "pr. ","<<過去分詞>>","<<複數>>","ing. "," ","<<形容詞>>","<<副詞>>","pla. ","pn. "," "]

class HelpDialog(GtkDialog):
    def __init__(self,modal=TRUE,file=None):
        GtkDialog.__init__(self)
	self.set_title("pyDict Help")
        self.connect("destroy", self.quit)
        self.connect("delete_event", self.quit)
        if modal:
            grab_add(self)
        box = GtkVBox(spacing=10)
        box.set_border_width(10)
        self.vbox.pack_start(box)
        box.show()
        self.swin = GtkScrolledWindow()
	self.swin.set_usize(500,300)
        box.pack_start(self.swin)
        self.swin.show()

	self.text = GtkText()
	self.swin.add(self.text)
	self.text.show()
	
	self.text.freeze()
	# get red color
	cmap = self.text.get_colormap()
	fg = cmap.alloc(65535,0,0)
	# read file in
	f = open(file,'r').readlines()
	for x in range(len(f)):
		# not pronunciation guide lines
		if f[x][0:3] != '   ':
			self.text.insert_defaults(f[x])
		# pronunciation guide lines
		else:
			for y in range(len(f[x])):
				if f[x][y] == '_' and y < len(f[x]) -3:
					if f[x][y+2] == '_':
						self.text.insert_defaults(f[x][0:y])
						self.text.insert(None,fg,None,f[x][y+1])
						self.text.insert_defaults(f[x][y+3:])
					elif f[x][y+3] == '_':
						self.text.insert_defaults(f[x][0:y])
						self.text.insert(None,fg,None,f[x][y+1:y+2])
						self.text.insert_defaults(f[x][y+4:])
	self.text.thaw()
	self.text.grab_focus()

        button = GtkButton("OK")
        button.connect("clicked", self.click)
        button.set_flags(CAN_DEFAULT)
        self.action_area.pack_start(button)
        button.show()
	self.ret = None

    def quit(self, w=None, event=None):
        self.hide()
        self.destroy()
    def click(self, button):
        self.quit()


class App(GtkWindow):
    def __init__(self):
        GtkWindow.__init__(self,WINDOW_TOPLEVEL)
        self.create_vars()
        self.create_boxes()
        self.create_widgets()

        self.connect("destroy",self.quit)
        self.connect("delete_event",self.quit)
        self.connect("key_press_event",self.rlookup)    

        self.entry.grab_focus()
        self.set_title("pyDict-0.2.5.1")
        self.set_usize(600,400)
        
    def create_vars(self):
        self.lookup_mode=0		# 0:English->Chinese  1:Chinese->English
        self.size_mode=1		# 1:large 0:small
        self.words = []
	self.index = 0			# initialize clistbox index        
    def create_boxes(self):
        self.b_large = GtkVBox()
        self.b_small = GtkVBox()
        self.add(self.b_large)
        self.small_win = GtkWindow(WINDOW_TOPLEVEL)
        self.small_win.add(self.b_small)
        self.b_small.show()
        self.b_large.show()	
        
    def create_widgets(self):
        #
	# create menubar
	#
        hdlbox = GtkHandleBox()
        self.b_large.pack_start(hdlbox, expand=FALSE)
        hdlbox.show()
        mf = GtkExtra.MenuFactory()
        mf.add_entries([
                ('檔案/離開', '<control>Q', self.quit),
                ('編輯/改變大小','<control>S',self.change_size),
                ('編輯/設定...', '<control>P', None),
                ('說明/說明...','<control>H',self.help_help),
                ('說明/關於...','<control>A',self.help_about),
        ])
        self.add_accel_group(mf.accelerator)
        hdlbox.add(mf)
        mf.show()
	#
	# create entrybox
	#
        hdlbox = GtkHandleBox()
        self.b_large.pack_start(hdlbox, expand=FALSE)
        hdlbox.show()
	hbox = GtkHBox()
	hdlbox.add(hbox)
	hbox.show()
	# create entry
	self.entry = GtkEntry()
	self.entry.connect("key_press_event",self.lookup)
	hbox.pack_start(self.entry,expand=FALSE)
	self.entry.show()
	# create commit button
	self.b_commit = GtkButton("Search")	
	self.b_commit.connect("clicked",self.lookup)
	hbox.pack_start(self.b_commit,expand=FALSE)
	self.b_commit.show()
	# create radiobutton
	self.rb_etoc = GtkRadioButton(None,"英翻中")
	hbox.pack_start(self.rb_etoc,expand=FALSE)
	self.rb_etoc.show()
        self.rb_ctoe = GtkRadioButton(self.rb_etoc,"中翻英")
	hbox.pack_start(self.rb_ctoe,expand=FALSE)
	self.rb_ctoe.show()
	# create smart toggle button
	self.tb_smart = GtkToggleButton("智慧模式")
	hbox.pack_start(self.tb_smart)
	self.tb_smart.show()
	# create scale button
	button = GtkButton("縮小")
	button.connect("clicked",self.change_size)
	hbox.pack_start(button)
	button.show()
	#
	# create listbox and explanation text
	#
	hbox = GtkHBox()
	self.b_large.pack_start(hbox)
	hbox.show()
	# create scrolledwindow for listbox
	swin = GtkScrolledWindow()
	swin.set_policy(POLICY_AUTOMATIC,POLICY_AUTOMATIC)
	swin.set_usize(200,400)
	hbox.pack_start(swin,expand=FALSE)
	swin.show()
	# create listbox
	self.clist= GtkCList(1)
	self.clist.set_column_width(0,180)
	self.clist.connect('select_row',self.select_list_word)
	self.clist.connect('key_press_event',self.move_list)
	swin.add(self.clist)
	self.clist.show()
	#create explanation text
	self.text = GtkText()
	hbox.pack_start(self.text)
	self.text.show()
	#
	# create a button for small hbox
	#
	button = GtkButton("pyDict-0.2.5.1")
	button.connect("clicked",self.change_size)
	self.b_small.pack_start(button,expand=FALSE)
	button.show()
	        
    def change_size(self, *args):
	if self.size_mode ==1:
		self.hide()
		self.small_win.show()
		self.size_mode = 0
	else:
		self.small_win.hide()
		self.show()
		self.size_mode = 1
		self.entry.grab_focus()

    def show_word(self,word):
	# initialize font
	style = self.text.get_style()
	try:
		font = load_font("-urw-bookman-light-r-normal-*-*-140-*-*-p-*-iso8859-1")
		newfont = TRUE
	except RuntimeError:
		newfont = FALSE
	# initialize red color
	cmap = self.text.get_colormap()
	fg = cmap.alloc(65535,0,0)
	#
	# freeze the text area
	#
	self.text.freeze()
        # clear the old one
	self.text.backward_delete(self.text.get_length())
       	# insert word
	self.text.insert_defaults(word['word']+'\n')
	# add mark if it exists
	if word.has_key('mark'):
		mark_string = '[' + word['mark'] + ']\n\n'
		if newfont:
			self.text.insert(font,None,None,mark_string)
		else:
			self.text.insert_defaults(mark_string)
	else:
		self.text.insert_defaults('\n')
	# show it in self.text
	for x in range(len(word['mean'])):
		index = find(word['mean'][x],'>>')
		if index != -1:
			# display red font
			self.text.insert(None,fg,None,word['mean'][x][:index+2])
			self.text.insert_defaults(word['mean'][x][index+2:]+'\n')
		else:
			self.text.insert_defaults(word['mean'][x]+ '\n')	
	#
	# thaw the text area
	#
	self.text.thaw()
		
    def update_list(self):
	# show words in self.listbox
	self.clist.freeze()
	self.clist.clear()
	for i in range(len(self.words)):				
		self.clist.append((self.words[i]['word'],))
	self.clist.columns_autosize()
	self.clist.thaw()

    def execute(self,word):	# English to Chinese
		# move self.index to top
		self.index = 0
		command = g_command + ' --after-context=20 "^' + word + '.*=.*$" ' + dict_path + lower(word[0]) + '.lib' + '|awk "NR < 19 "'
		result_lines = os.popen(command,'r').readlines()
		#if result_lines:
		if result_lines:
			# initiate the word list
			self.words=[]
			for x in range(len(result_lines)):
				self.words.append(process_line(result_lines[x]))
			# show the first word in self.text
			self.show_word(self.words[0])
			self.update_list()
		else:
		        # clear the old one
			self.text.backward_delete(self.text.get_length())
			self.text.insert_defaults(word + ' not found!!')

    def c_execute(self,word):		# chinese to English
		# move self.index to top
		self.index = 0
		pro_inp = ''
		inp = word
		num = len(inp)
		#esc_list = []
		#for x in range(33,128):
		#	esc_list.append(chr(x))
		for x in range(num):
			#if inp[x] in esc_list:
			if inp[x] == '\\':
				pro_inp = pro_inp + '\\\\\\' + inp[x]
			else:
				pro_inp = pro_inp + inp[x]

		command = g_command + ' ".*=.*' + pro_inp + '.*$" ' + dict_path + '*.lib'
		result_lines = os.popen(command,'r').readlines()
		#if result_lines:
		if result_lines:
			# initiate the word list
			self.words=[]
			for x in range(len(result_lines)):
				self.words.append(process_line(result_lines[x]))
			# show the first word in self.text
			self.show_word(self.words[0])
			# show words in self.listbox
			self.update_list()
		else:
		        # clear the old one
			self.text.backward_delete(self.text.get_length())
			self.text.insert_defaults(word + ' not found!!')

    def row_execute(self,word,up_down):		
	# roll_up or roll_down in clist 
	# up_down == 0 : up
	# up_down == 1 : down 
	command = g_command + ' -1 "^' + word + '.*=.*$" ' + dict_path + lower(word[0]) + '.lib' + '|awk "NR < 2 "'
	result_lines = os.popen(command,'r').readlines()
	# insert new word
	if up_down == 0:	# up
		command = g_command + ' -1 "^' + word + '.*=.*$" ' + dict_path + lower(word[0]) + '.lib' + '|awk "NR < 2 "'
		result_lines = os.popen(command,'r').readlines()
		self.words.insert(0,process_line(result_lines[0]))
		self.words.pop()
		self.show_word(self.words[0])
		self.clist.remove(len(self.words)-1)
		self.clist.insert(0,(self.words[0]['word'],))
	elif up_down == 1:
		command = g_command + ' -1 "^' + word + '.*=.*$" ' + dict_path + lower(word[0]) + '.lib' + '|tail -n 1'
		result_lines = os.popen(command,'r').readlines()
		self.words.append(process_line(result_lines[0]))
		temp = self.words.pop(0)
		self.show_word(self.words[len(self.words)-1])
		self.clist.remove(0)
		self.clist.append((self.words[len(self.words)-1]['word'],))
	#self.update_list()

	
    def lookup(self,*args):
        # args[0]: widget  args[1]: event
	# if self.lookup_mode == 0:			# English to Chinese
	# and if self.tb_smart.get_active() == 1:	# smart mode
	if self.rb_etoc.get_active() and self.tb_smart.get_active():
		if args[1].keyval <= 256:
			word = args[0].get_text() + chr(args[1].keyval)
			self.execute(lstrip(word))
		elif args[1].keyval == BackSpace:	#25688
			word = args[0].get_text()[:-1] 
			if word != '':
				self.execute(lstrip(word))
			else:
				self.clist.clear()
				# clear the old one
				self.text.backward_delete(self.text.get_length())
	# English to Chinese but no smart mode
	elif args[0] == self.b_commit or (self.rb_etoc.get_active() and args[1].keyval in (KP_Enter,Return)):
		word = strip(self.entry.get_text())	# trim white spaces
		self.execute(word)		
		self.entry.set_text(word)
		self.entry.select_region(0,-1)		# 0-->beginning 1-->end			
	# Chinese to English mode
	elif self.rb_ctoe.get_active():			# Chinese to English
		if args[0] == self.b_commit or args[1].keyval in (KP_Enter,Return):
			word = self.entry.get_text()
			self.c_execute(strip(word))
			self.entry.select_region(0,-1)		# 0-->beginning 1-->end 
	
    # begin input words when key press event is received.
    def rlookup(self,*args):
	if args[1].keyval == F1:
		self.help_help()
	elif args[1].keyval <= 256 or args[1].keyval == BackSpace:
		self.entry.grab_focus()
    def select_list_word(self,*args):
        # args[0]: widget   args[1]: row   args[2]: column  args[3]: event
        word = self.clist.get_text(args[1],args[2])
	# fine index of the word in self.words
	for x in self.words:
		if x['word'] == word:
			self.index = index = self.words.index(x)
			break
	# show the word
	self.show_word(self.words[index])
	       	
        
    def move_list(self,*args):
        # args[0]: widget   args[1]: event
        if args[1].keyval == 65362 and self.index != 0:		#KP_Up
        	self.clist.unselect_row(self.index,0)
        	self.index = self.index - 1
        	self.clist.select_row(self.index,0)
        	self.select_list_word(None,self.index,0,None)
	elif args[1].keyval == 65362 and self.index == 0 and self.rb_etoc.get_active(): #go up
		self.row_execute(self.words[0]['word'],0)
		self.clist.unselect_row(self.index,0)
		self.clist.select_row(0,0)
        elif args[1].keyval == 65364 and self.index < len(self.words)-1:		#KP_Down         
		self.clist.unselect_row(self.index,0)
         	self.index = self.index + 1
        	self.clist.select_row(self.index,0)
        	self.select_list_word(None,self.index,0,None)
	elif args[1].keyval == 65364 and self.index == len(self.words) -1 and self.rb_etoc.get_active(): # go down
		self.row_execute(self.words[len(self.words)-1]['word'],1)
		self.clist.unselect_row(self.index,0)
		self.clist.select_row(len(self.words)-1,0)
        elif args[1].keyval == 65365 and self.index -5 >= 0:		#KP_Page_Up
        	self.clist.unselect_row(self.index,0)
        	self.index = self.index -5
        	self.clist.select_row(self.index,0)
        	self.select_list_word(None,self.index,0,None)
        elif args[1].keyval == 65366 and self.index + 5 < len(self.words)-1:		#KP_Page_Down 	
        	self.clist.unselect_row(self.index,0)
        	self.index = self.index + 5
        	self.clist.select_row(self.index,0)
        	self.select_list_word(None,self.index,0,None)

    def quit(self,*args):
        mainquit()

    def help_about(self,mi=None):
	GtkExtra.message_box("pyDict v0.2.5.1",
	"""pyDict v0.2.5.1
	Made by Daniel Gau
	<plateau@pagic.net>
	for my lovely wife, Cecile Ho.
	""",("OK",),pixmap='/usr/X11R6/lib/X11/pyDict/yaba.xpm')
	
    def help_help(self,mi=None):
	hd = HelpDialog(file = "/usr/X11R6/lib/X11/pyDict/HELP")
	hd.show()
	
# change proposition
def change_prop(str):
	start=0
	end=0
	mean_list = []
	tmp = str
	for x in range(len(prop)):
		tmp = replace(tmp,chr(x),'@@'+prop[x])
	return tmp

# display soundmarks
def change_pron(str):
	tmp = ''
	for x in range(len(str)):
		if str[x] == chr(0x01):
			tmp = tmp + 'I'
		elif str[x] == chr(0x02):
			tmp = tmp + 'E'
		elif str[x] == chr(0x03):
			tmp = tmp + 'ae'
		elif str[x] == chr(0x04):
			tmp = tmp + 'a'
		elif str[x] == chr(0x06):
			tmp = tmp + 'c'
		elif str[x] == chr(0x0b):
			tmp = tmp + '8'
		elif str[x] == chr(0x0e):
			tmp = tmp + 'U'
		elif str[x] == chr(0x0f):
			tmp = tmp + '^'
		elif str[x] == chr(0x10):
			tmp = tmp + '2'
		elif str[x] == chr(0x11):
			tmp = tmp + '2*'
		elif str[x] == chr(0x13):
			tmp = tmp + '2~'
		elif str[x] == chr(0x17):
			tmp = tmp + 'l.'
		elif str[x] == chr(0x19):
			tmp = tmp + 'n_'
		elif str[x] == chr(0x1c):
			tmp = tmp + '&'
		elif str[x] == chr(0x1d):
			tmp = tmp + 'S'
		elif str[x] == chr(0x1e):
			tmp = tmp + '3'
		elif str[x] == chr(0x65) and x == 0:
			pass
		else:
			tmp = tmp + str[x]
	return tmp

# transform line to word, meanning_list, mark	
def process_line(str):
    temp = {}
    split_word = split(str,'=')
    temp['word'] = split_word[0]
    lines = split(change_prop(split_word[1]),'@@')
    temp['mean'] = lines
    if len(split_word) == 3 and split_word[2] != '\n':
        temp['mark'] = change_pron(split_word[2][:-1])
    return temp
        
    	
# run English-Chinese under console

def console_e_dict(input=None):
	#set up g_command
	g_command = '/bin/grep --ignore-case'
	if input == None:
		inp = raw_input('word:')
	else:
		inp = input
		
	while 1:
		if inp == '-q' or inp == '':
			return
		elif inp == '-e':
			pass
		elif inp == '-c':
			console_c_dict()
			return
		else:	
			command = g_command + " '^" + inp + "=.*$' " + dict_path + lower(word[0]) + '.lib'
			result_line = os.popen(command,'r').readline()
			#if result_lines:
			if result_line:
				line = result_line
				word = process_line(line)
				# insert word
				print word['word'] 
				# add mark if it exists
				if word.has_key('mark'):
					mark_string = '[' + word['mark'] + ']'
					print mark_string + '\n' 
				else:
					print '\n'
				# show it in self.text
				for x in range(len(word['mean'])):
					print word['mean'][x] 	
				print 		
			else:
				print 'Not found'
			# only execute once
			if input != None:
				return
			inp = raw_input('word:')
        
# run Chinese-English under console

def console_c_dict(input=None):
	#set up g_command
	g_command = '/bin/grep '
	if input == None:
		inp = raw_input('word:')
	else:
	    inp = input

	while 1:
		pro_inp = ''
		if inp == '-q' or inp == '':
			return	
		elif inp == '-c':
			pass
		elif inp == '-e':
			console_e_dict()
			return
		else:
			# fixing Chinese Escape character
			num = len(inp)
			for x in range(num):
				if inp[x] == '\\':
					pro_inp = pro_inp + '\\\\\\' + inp[x]
				else:
					pro_inp = pro_inp + inp[x]

			command = g_command + ' ".*=.*' + pro_inp + '.*$" ' + dict_path + '*.lib'
			result_lines = os.popen(command,'r').readlines()
			#if result_lines:
			if result_lines != None:
				for line in result_lines:
					word = process_line(line)
					# insert word
					print word['word'] 
					# add mark if it exists
					if word.has_key('mark'):
						mark_string = '[' + word['mark'] + ']'
						print mark_string + '\n'
					else:
						print '\n'
					# show it in self.text
					for x in range(len(word['mean'])):
						print word['mean'][x] 	
					print 		
			else:
				print 'Not found'
			if input != None:
				return
			inp = raw_input('word:')
if __name__ == '__main__':
    Usage ="""
pydict [options] [word]

options:
  -h		print out this help
  -i		console interactive mode
  -e [word]	English-Chinese mode(Default value)
  -c [word]	Chinese-English mode
  -q		Exit
    """

    def Header():
	# print title
	print '#----------------------------------------------------#'
	print '#  pyDict-0.2.5.1  Made by Daniel Gau(plateau)       #'
	print '#----------------------------------------------------#'
	print

	print 'type -q to leave'
	print 'type -c to Chinese-English mode'
	print 'type -e to English-Chinese mode'

    # set up grep command
    g_command = '/bin/grep --ignore-case'
    dict_path = '/usr/X11R6/lib/X11/pyDict/'

    # check if there is an DISPLAY environment variable
    if os.environ.has_key('DISPLAY') and len(sys.argv) == 1:
	app = App()
	app.show()
	mainloop()
    # if there isn't, then check the variable
    # the default is console English-Chinese mode.
    elif len(sys.argv) == 1:
	Header()
        console_e_dict(None)
    # two parameter. 
    elif len(sys.argv) == 2:
	if sys.argv[1] == '-i' or sys.argv[1] == '-e':
		Header()
        	console_e_dict(None)
	elif sys.argv[1] == '-c':
		Header()
        	console_c_dict(None)
	elif sys.argv[1] == '-h':
		print Usage
	else:
		console_e_dict(sys.argv[1])
    elif len(sys.argv) == 3:
	if sys.argv[1] == '-e':
        	console_e_dict(sys.argv[2])
	elif sys.argv[1] == '-c':
        	console_c_dict(sys.argv[2])
    else:
	print Usage
		
        
    
