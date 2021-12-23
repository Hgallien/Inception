#!/bin/bash
mkdir -p /var/www/html/phpmyadmin/tmp && chmod 777 /var/www/html/phpmyadmin/tmp
chown -R $USER:$USER /var/www/html

apt-get update
apt-get upgrade -y
apt-get install -y nginx bash vim\
