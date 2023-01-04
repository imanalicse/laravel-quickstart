php artisan storage:link
 INFO  The [\laravel-quickstart\public\storage] link has been connected to [\laravel-quickstart\storage\app/public].

php artisan serve

php artisan migrate
php artisan make:migration create_flights_table
php artisan make:migration add_role_to_users_table --table=users
php artisan migrate:status
php artisan migrate --pretend 
php artisan migrate --force

php artisan migrate:rollback
php artisan migrate:rollback --step=5
php artisan migrate:reset

php artisan migrate:refresh
# Refresh the database and run all database seeds...
php artisan migrate:refresh --seed

php artisan migrate:fresh
php artisan migrate:fresh --seed

php artisan optimize

php artisan make:middleware EnsureTokenIsValid