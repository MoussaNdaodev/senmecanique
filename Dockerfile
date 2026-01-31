# Utiliser l'image officielle PHP avec FPM
FROM php:8.2-fpm

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev zip unzip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

# Copier tout le projet dans le conteneur
COPY . .

# Installer les dépendances Laravel en mode production
RUN composer install --no-dev --optimize-autoloader

# Optimiser la configuration Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Exposer le port 80
EXPOSE 80

# Commande de démarrage du serveur Laravel
CMD php artisan serve --host=0.0.0.0 --port=80
