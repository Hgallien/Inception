#!/bin/bash

echo 'rootdir="/var/www/html"' >> /root/.bashrc
echo 'ngdir="/etc/nginx"' >> /root/.bashrc

ln -f /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

service nginx start
