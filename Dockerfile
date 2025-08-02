# syntax = docker/dockerfile:experimental

FROM php:8.2-fpm as app

# Install system dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libxml2-dev sqlite3 libsqlite3-dev libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Copy pre-configured .env for SQLite
COPY .env.example .env

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev \
    && mkdir -p storage/logs database \
    && touch database/database.sqlite \
    && chmod -R 777 storage bootstrap/cache database

# Generate APP_KEY if not present
RUN if ! grep -q "^APP_KEY=base64" .env; then php artisan key:generate; fi

# Final base image to keep clean and minimal
FROM php:8.2-fpm-alpine

WORKDIR /var/www

# Copy app from previous stage
COPY --from=app /var/www /var/www

EXPOSE 9000

CMD ["php-fpm"]
