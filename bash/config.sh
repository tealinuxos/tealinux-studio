#!/bin/bash

theme=`cat /tmp/prop | cut -d' ' -f1`
icon=`cat /tmp/prop | cut -d' ' -f2`
wallpaper=`cat /tmp/prop | cut -d' ' -f3`
arsitektur=`cat /tmp/prop | cut -d' ' -f4`

cd /usr/res/deb
sudo dpkg -i *.deb

sudo python3 /usr/res/scripts/xmlparser.py $1 $2 $3

exit