#!/bin/bash
mkdir -p /var/www/html/phpmyadmin/tmp && chmod 777 /var/www/html/phpmyadmin/tmp
chown -R $USER:$USER /var/www/html

apt-get update
apt-get upgrade -y
apt-get install -y  bash vim \
wget apt-utils\
 php7.3 php-mysql php-xml php-fpm php-json php-curl php-intl php-pdo php-gd php-cli php-mbstring

wget http://fr.wordpress.org/latest-fr_FR.tar.gz && \
tar -xzvf latest-fr_FR.tar.gz && \
mv wordpress /var/www/html && \
rm latest-fr_FR.tar.gz && \
rm -f /var/www/html/wordpress/wp-config-sample.php && \
mv /tmp/wp-config.php /var/www/html/wordpress 
