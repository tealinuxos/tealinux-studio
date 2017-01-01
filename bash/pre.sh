#!/bin/bash

# $1 -> id task
# $2 -> username

tmp=`python3 ./mysqlbridge.py select arsiektur,theme,wallpaper,icon from tasks where id=$1`
app=`python3 ./mysqlbridge.py select list_aplikasi from tasks where id=$1`
apps=`echo ${app//[[:blank:]]/} | tr ',' '\n'`

#for i in $apps; do
	#statements
#	echo $i
#done
res="/usr/res"

arsitektur=`echo $tmp | cut -d' ' -f1`
theme=`echo $tmp | cut -d' ' -f2`
wallpaper=`echo $tmp | cut -d' ' -f3`
icon=`echo $tmp | cut -d' ' -f4`
iso=".iso"

# echo arsitektur = $arsitektur
# echo theme = $theme
# echo wallpaper = $wallpaper
# echo app = $apps

# unpack
sudo uck-remaster-unpack-iso /usr/res/iso/tealinux_core_$arsitektur$iso
sudo uck-remaster-unpack-rootfs

# prepare deb
sudo mkdir -p ~/tmp/remaster-root/usr/res/deb

# copy deb in one folder
for package in $apps; do
	sudo cp -r $res/deb/$package/* ~/tmp/remaster-root/usr/res/deb
done

# copy theme & wallpaper
# sudo cp -r $res/themes/$theme ~/tmp/remaster-root/usr/share/themes/
# sudo cp $res/wallpapers/$wallpaper ~/tmp/remaster-root/usr/share/wallpapers/

# copy skel
sudo cp -rf $res/skel ~/tmp/remaster-root/etc/

# copy bash and python file
sudo cp -r $res/scripts/ ~/tmp/remaster-root/usr/res/

echo "$theme $icon $wallpaper $arsitektur" > ~/tmp/remaster-root/tmp/prop

sudo uck-remaster-chroot-rootfs