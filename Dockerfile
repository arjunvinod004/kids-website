FROM php:8.2-cli

# Install system deps + PostgreSQL support
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql pgsql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# PHP deps
RUN composer install --no-dev --optimize-autoloader

# Node for Vite
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

RUN npm install && npm run build

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 10000
CMD php artisan config:clear && php artisan cache:clear && php -S 0.0.0.0:10000 -t public