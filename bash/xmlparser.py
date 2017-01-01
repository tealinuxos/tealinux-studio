import xml.etree.ElementTree as etree
import sys

skel = '/etc/skel/.config/xfce4/xfconf/xfce-perchannel-xml/'
#skel = 'xml/'
# usage: xmlparser.py theme_name icon_name wallpaper_file_url

xfwm4 = etree.parse(skel+'xfwm4.xml')
xsettings = etree.parse(skel+'xsettings.xml')
desktop = etree.parse(skel+'xfce4-desktop.xml')

# set window theme
root = xfwm4.getroot()
root[0][3].attrib['value'] = sys.argv[1]
xfwm4.write(skel+'xfwm4.xml')

# set gtk theme
root = xsettings.getroot()
root[0][0].attrib['value'] = sys.argv[1]
xsettings.write(skel+'/xsettings.xml')

# set icon theme
root = xsettings.getroot()
root[0][1].attrib['value'] = sys.argv[2]
xsettings.write(skel+'/xsettings.xml')

# set wallpaper
root = desktop.getroot()
root[1][0][2][0][2].attrib['value'] = sys.argv[3]
root[1][0][2][1][2].attrib['value'] = sys.argv[3]
root[1][0][0][0].attrib['value'] = sys.argv[3]
root[1][0][1][0].attrib['value'] = sys.argv[3]
desktop.write(skel+'xfce4-desktop.xml')
