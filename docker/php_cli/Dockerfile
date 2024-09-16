FROM php:8.3-cli
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer
COPY ../../code /var/www
WORKDIR /var/www
RUN composer install

EXPOSE 9000
