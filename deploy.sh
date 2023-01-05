#!/bin/bash
cd /var/www
composer install --optimize-autoloader --no-dev
npm install
php artisan down
php artisan view:clear
php artisan route:clear
php artisan config:clear
php artisan migrate --force
npm run prod
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan queue:restart
php artisan up