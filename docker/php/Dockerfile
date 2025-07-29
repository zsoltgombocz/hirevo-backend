FROM php:8.4-fpm

# System dependencies
RUN apt-get update && apt-get install -y \
    curl libpng-dev libonig-dev libxml2-dev zip unzip git supervisor

RUN mkdir -p /var/log/supervisor

# PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create app dir
WORKDIR /var/www


# Supervisor config for Reverb
COPY docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

CMD ["/usr/bin/supervisord"]
