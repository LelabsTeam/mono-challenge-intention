FROM php:8.2-fpm-alpine

COPY composer.lock composer.json /var/www/intention/

WORKDIR /var/www/intention/

RUN apk update && \
    apk add git zip unzip

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions bcmath exif gd mbstring mysqli opcache pcntl pdo_mysql intl zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apk add --update npm

RUN addgroup -g 1000 -S intention && \
    adduser -u 1000 -D -S -G intention intention

COPY --chown=intention:intention . /var/www/intention

USER intention

EXPOSE 9000
CMD ["php-fpm"]

