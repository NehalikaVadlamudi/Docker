FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update

RUN apt-get install apache2 php libapache2-mod-php php-mysql -y

WORKDIR /var/www/html

COPY public/ /var/www/html/

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]