#! /bin/bash
sudo rm -rf /app/*
sudo cp -r code/hospital/. /app/

sudo chown -R www-data:staff /app/*
#sudo chmod 666 /app/images/avatars/upload/ /app/config.php
#sudo chmod 777 /app/store/ /app/cache/ /app/files/
sleep 10;
echo "DROP DATABASE IF EXISTS hms" | sudo mysql
#sleep 5;
#echo "CREATE DATABASE hms" | sudo mysql
#echo "GRANT ALL PRIVILEGES on hms.* to 'username'@'localhost' identified by 'password';FLUSH PRIVILEGES;"| sudo mysql

sudo mysql < ./hms.sql

