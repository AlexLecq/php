#!/bin/bash

PATH_FILE=/tmp/backups-$(date +"%s").tar.gz

tar zcfv $PATH_FILE --exclude=/home/jarvis/.cache --exclude=/home/jarvis/.nuget /
rsync -zarhv --progress $PATH_FILE pi@192.168.1.36:/var/ftp/data

rm -rf $PATH_FILE
