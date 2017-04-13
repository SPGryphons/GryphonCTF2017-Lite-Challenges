FROM php:7.0-apache
RUN apt-get update
RUN apt-get upgrade -y
COPY ./var/gpa_secret /var/gpa_secret/
COPY ./service /var/www/html/
RUN chmod 111 /var/gpa_secret -R
RUN chmod 111 /var/www/html/passwd
EXPOSE 80
