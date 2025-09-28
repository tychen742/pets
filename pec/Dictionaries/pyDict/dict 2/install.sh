#!/bin/sh
######### CVS informations #########
#   $Id: install.sh,v 1.5 2000/09/17 23:32:48 danielgau Exp $
####################################
#
# pyDict Installation Script
#
#     created by plateau <danielgau@users.sourceforge.net>
#     modified by storm <sfyang@users.sourceforge.net>
#

# define some variables
VERSION='0.2.5.1'
GNOME_SHORTCUT_DIR='/usr/share/gnome/apps/Chinese/'
ICONS_DIR='/usr/share/icons/'
DATA_DIR='/usr/X11R6/lib/X11/pyDict/'
EXEC_DIR='/usr/X11R6/bin/'
DOC_DIR="/usr/doc/pyDict-$VERSION/"
MAIN_DATA='[a-z].lib yaba.xpm HELP'
DOC='CHANGELOG README COPYING'

# install main files
mkdir -p $DATA_DIR
install -m 644 $MAIN_DATA $DATA_DIR
mv dict.py pydict
install -D -m 755 pydict $EXEC_DIR
# install pyDict.desktop and dict.xpm if corresponding directories exist 
[ -d $GNOME_SHORTCUT_DIR ] && install -m 644 pyDict.desktop $GNOME_SHORTCUT_DIR
[ -d $ICONS_DIR ] && install -m 644 dict.xpm $ICONS_DIR
# install documents
mkdir -p $DOC_DIR
install -m 644 $DOC $DOC_DIR

cat << EOF
########################################
#                                      #
#            pyDict v$VERSION             #
#         Made by Daniel Gau           #
#       <plateau@pagic.net>            #
#    for my lovely wife,Cecile Ho      #
#                                      #
########################################

Thank you for installing pyDict v$VERSION

請打 pydict -x 啟動視窗模式
或打 pydict [-e|c] 啟動文字模式
或打 pydict -h 顯示簡單的說明

EOF
