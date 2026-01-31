FROM php:8.2-fpm

# Dépendances système
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql bcmath

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Permissions Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Installer dépendances
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
