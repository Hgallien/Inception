FROM debian:buster

COPY srcs/install.sh /tmp
COPY srcs/start.sh /tmp
COPY srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php
RUN sh /tmp/install.sh

EXPOSE	80
EXPOSE	443

CMD bash /tmp/start.sh ; bash
