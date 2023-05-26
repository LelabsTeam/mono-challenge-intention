FROM php:8.1.0-fpm-alpine

WORKDIR /var/www/html

RUN mkdir -p /webapp/storage

RUN chown -R $(whoami):www-data /webapp/storage && chmod -R ug+w /webapp/storage
RUN apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql
RUN apk add --no-cache zip libzip-dev libpng-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd
