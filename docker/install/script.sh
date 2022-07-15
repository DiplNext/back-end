#!/bin/sh

cd /var/www/html

#Install composer dependencies
if [ "$ENV" == 'production' ]; then
    echo "Production server loading..."
    composer install --optimize-autoloader --no-dev
else
    composer install --optimize-autoloader
fi

# Clear laravel cache and set application key
php artisan optimize:clear
php artisan key:generate

#Install npm dependencies
if [ "$ENV" == 'production' ]; then
    echo "Production server loading..."
    npm set-script prepare ""
fi

npm i

# Clear logs
rm -rf /storage/docker/logs/nginx/
rm -rf /storage/docker/logs/php/
rm -rf /storage/docker/logs/supervisor/
rm -rf /storage/docker/supervisor/run/

mkdir -p /storage/docker/logs/nginx/
mkdir -p /storage/docker/logs/php/
mkdir -p /storage/docker/logs/supervisor/
mkdir -p /storage/docker/supervisor/run/

# Run supervisor default configuration
/usr/bin/supervisord -c /etc/supervisord.conf
