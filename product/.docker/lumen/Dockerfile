FROM php:8.2-fpm-alpine

COPY composer.lock composer.json /var/www/product/

WORKDIR /var/www/product/

RUN apk update && \
    apk add git zip unzip

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions bcmath exif gd mbstring mysqli opcache pcntl pdo_mysql intl zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apk add --update npm

RUN addgroup -g 1000 -S product && \
    adduser -u 1000 -D -S -G product product

COPY --chown=product:product . /var/www/product

USER product

EXPOSE 9001
CMD ["php-fpm"]

