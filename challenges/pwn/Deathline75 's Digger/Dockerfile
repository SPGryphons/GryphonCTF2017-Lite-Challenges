FROM php:7.0-apache
RUN apt-get update && apt-get install dnsutils -y
COPY ./service /var/www/html/
RUN chown root:root -R /var/www/html/
RUN chmod 755 /var/www/html/
RUN chmod 444 /var/www/html*
