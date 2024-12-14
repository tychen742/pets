#!/bin/bash
echo Downloading MySQL backup files...
# Start of "here" document


USER=tychen
PASSWD=redcar@2019
HOST=tychen.us
date=$( date +"%Y-%m-%d-" )
# day=$(( $( date +"%d" ) -1 ))
# if ( $day < 10 ) {
# $day=$( 0+$day )

# date=$( date +"%Y-%m-${day}-" )

for file in hbdi.gz mysql.gz phpmyadmin.gz 
do
  
	lftp sftp://$USER:$PASSWD@$HOST -e "cd /backups/mysql; get ${date}${file}; bye" 

done

