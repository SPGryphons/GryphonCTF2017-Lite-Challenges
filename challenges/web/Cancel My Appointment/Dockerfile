FROM php:7.0-apache
RUN apt-get update
RUN apt-get upgrade -y
RUN docker-php-ext-install mysqli
COPY ./service /var/www/html/
EXPOSE 80
