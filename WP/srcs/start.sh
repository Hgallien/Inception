#!/bin/bash

echo 'rootdir="/var/www/html"' >> /root/.bashrc
echo 'wpdir="$rootdir/wordpress"' >> /root/.bashrc

service php7.3-fpm start
