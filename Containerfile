FROM php:8.4-apache
COPY index.php /var/www/html/index.php

RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf
EXPOSE 8080
RUN sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install mysqli
