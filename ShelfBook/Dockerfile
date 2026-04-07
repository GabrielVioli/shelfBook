FROM php:8.3-cli-alpine

RUN apk add --no-cache \
    sqlite-dev \
    libzip-dev \
    unzip \
    git \
    curl

RUN docker-php-ext-install pdo pdo_sqlite zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --optimize-autoloader
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
