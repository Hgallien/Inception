FROM debian:buster

COPY srcs/install.sh /tmp
COPY srcs/start.sh /tmp
COPY srcs/wp-config.php /tmp
RUN sh /tmp/install.sh

EXPOSE	80
EXPOSE	443

CMD bash /tmp/start.sh ; bash
