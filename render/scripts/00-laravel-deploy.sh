#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Running node"
curl -fsSL https://deb.nodesource.com/setup_18.x | bash - &&\
echo "========================="
apt-get update
echo "========================="
apt-get install -y nodejs
node -v
npm -v
npm ci

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

# echo "Running migrations..."
# php artisan migrate --force