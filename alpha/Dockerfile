FROM php:7.0-apache
RUN docker-php-ext-install mysqli
EXPOSE 80
COPY esame/* /var/www/html/
# WORKDIR /var/www/html/
# VOLUME . /var/www/html/
