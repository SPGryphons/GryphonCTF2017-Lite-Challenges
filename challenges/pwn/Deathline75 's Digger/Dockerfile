FROM php:7.0-apache
RUN apt-get update && apt-get install dnsutils -y
COPY ./service /var/www/html/
RUN chmod 555 /var/www/html/ -R
