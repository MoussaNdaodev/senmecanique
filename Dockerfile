FROM php:8.2-fpm

# Installer dépendances système et extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev zip unzip git curl \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql mbstring bcmath gd

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Optimiser Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

EXPOSE 80
CMD php artisan serve --host=0.0.0.0 --port=80
