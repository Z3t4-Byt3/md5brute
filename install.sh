#!/bin/bash

color=`echo "\033[34m"`
end=`echo "033[1;m"`
if [ $USER != "root" ]; then
	echo "Nao permitido, entre como root";
	exit
fi

if [ -e "/opt/md5brute/" ]
then
	chmod +x md5brute.php
        ln -s /opt/md5brute/md5brute.php /usr/bin/md5brute
        echo -ne "$color A instalaçao terminou! Utilize o comando md5brute\n";
else
	echo -ne  "Mova o md5brute para /opt \n";
fi
