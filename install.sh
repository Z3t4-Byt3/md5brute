#!/bin/bash

color=`echo "\033[34m"`
end=`echo "033[1;m"`
if [ $USER != "root" ]; then
	echo "Nao permitido, entre como root";
	exit
fi
chmod +x md5brute.php
ln -s /opt/md5brute/md5brute.php /usr/bin/md5brute
echo -ne "$color A instalaçao terminou! Utilize o comando md5brute\n";
