FROM php:8.2.1-fpm

WORKDIR /var/www/html

COPY . .

RUN apt-get update && apt-get install -y --no-install-recommends \
    zip unzip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql

# Cleanup
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER 1 

RUN composer self-update
