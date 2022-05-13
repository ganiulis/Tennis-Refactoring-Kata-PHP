FROM php:8.1-fpm-alpine

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk --no-cache add \
    curl \
    git \
    make \
    zsh \
    $PHPIZE_DEPS

RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

