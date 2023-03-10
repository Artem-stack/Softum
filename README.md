download zip file or clone the project
cd Softum
cp .env.example .env
open .env and update DB_DATABASE 
run : composer install
run : php artisan key:generate
run : php artisan migration
run : php artisan serve