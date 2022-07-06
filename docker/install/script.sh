#!/bin/sh

cd /var/www/html

#Install composer dependencies
composer install --optimize-autoloader

# Copy .env file
cp .env.example .env

# Clear laravel cache and set application key
php artisan optimize:clear
php artisan key:generate

#Install npm dependencies
npm i

# Clear logs
rm -rf /storage/docker/logs/nginx/
rm -rf /storage/docker/logs/php/
rm -rf /storage/docker/logs/supervisor/
rm -rf /storage/docker/supervisor/run/

# Run supervisor default configuration
/usr/bin/supervisord -c /etc/supervisord.conf
