#!/bin/bash
mkdir -p /var/www/html/phpmyadmin/tmp && chmod 777 /var/www/html/phpmyadmin/tmp
chown -R $USER:$USER /var/www/html

apt-get update
apt-get upgrade -y
apt-get install -y  bash vim\
  mariadb-server\
 wget apt-utils\
 php7.3 php-mysql php-xml php-fpm php-json php-curl php-intl php-pdo php-gd php-cli php-mbstring\
 mariadb-client mariadb-server

wget -P /tmp https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
tar xvfz /tmp/phpMyAdmin-latest-all-languages.tar.gz \
--strip-components=1 -C /var/www/html/phpmyadmin

