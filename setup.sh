cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan storage:link
