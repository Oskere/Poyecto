FROM mysql:5.7.15

MAINTAINER me

ENV MYSQL_ROOT_PASSWORD=root

ADD reto.sql /docker-entrypoint-initdb.d
ADD phpmyadmin.sql /docker-entrypoint-initdb.d

EXPOSE 3306