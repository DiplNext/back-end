#!/bin/sh

cd /var/www/html

#Install composer dependencies
#if [ "$ENV" == 'production' ]; then
#    echo "Production server loading..."
#    composer install --optimize-autoloader --no-dev
#else
#    composer install --optimize-autoloader
#fi
#
## Clear laravel cache and set application key
#php artisan optimize:clear
#php artisan key:generate
#
##Install npm dependencies
#if [ "$ENV" == 'production' ]; then
#    echo "Production server loading..."
#    npm set-script prepare ""
#fi
#
#npm i
#

# Run supervisor default configuration
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
