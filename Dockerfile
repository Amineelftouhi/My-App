FROM php:8.2-cli

RUN apt-get update && apt-get install -y zip unzip git

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install

CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
