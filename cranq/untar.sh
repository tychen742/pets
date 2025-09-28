##### This script go through the tar.gz files and unpack them to packages/decomped/ dir

### get package names
######  ls -l > tar.list -----> has timestamp!!!!!! #####
# timestamp(){
# dt=$( date +"_%Y%m%d-%H%M%S" )
# }

ls archives > process_files/archives.list

##### set variables
# pkg=packages
# pkg=new_packages

### untar tar $pkg/tar.gz's with original directory name to decomped folder

targz=".tar.gz"
while read line ; do
#    FILENAME=$( echo $line | cut -d" " -f 9 )
#    DATETIME=$( echo $line | cut -d" " -f 6-8 )
#    (
#    cd packages
    if [[ ${line: -7:7} == "${targz}" ]]  ; then

	dirname="${line}"
#	echo $dirname
	pkgname=$( echo $line | awk -F'[_.]' '{ print $1 }' )
#	echo $pkgname
	tar -xpf ./archives/$line
# 	echo test
	mv $pkgname ./decompressed/$dirname
#	(
#	    cd untarred
#	    tar -xf 
#	)
    fi
#    )

done < ./process_files/archives.list
