# $1 -> username
# $2 -> password

useradd -m $1 -G sudo -s /bin/bash
echo '$1:$2' | sudo chpasswd

echo "/bin/bash /usr/res/scripts/pre.sh" >> /home/$1/.bashrc
