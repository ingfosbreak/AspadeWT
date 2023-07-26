docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs


cp .env.example .env

DB_HOST=mysql
DB_PASSWORD=password
REDIS_HOST=redis

sail artisan key:generate

sail yarn install
sail yarn dev