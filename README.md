## Run Dev
npm run dev

php artisan key:generate
php artisan serve

run npm run dev and php artisan serve at the same time different terminals

### pick a port
change these in .env
SERVER_PORT and SERVER_HOST 

or 

php artisan serve --port=8000

## installing
install npm ```npm i```
install laravel  ```composer global require laravel/installer```
install composer ```composer install --ignore-platform-reqs```
install fly.io for production ```iwr https://fly.io/install.ps1 -useb | iex```

## fly.io db localhost
In this guide you’ll tunnel to your MySQL instance through the use of fly proxy

Open your MySQL application’s fly.toml and take note of the following:


app = "<mysql-app-name>"

[env]
  MYSQL_DATABASE = "<database-name>"
  MYSQL_USER =  "<database-user>"
Then use fly proxy to tunnel to your MySQL application:


fly proxy 3306 -a <mysql-app-name>
Finally, update your Laravel application’s local .env file with the values from your MySQL fly.toml file:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<MYSQL_DATABASE>
DB_USERNAME=<MYSQL_USER>
DB_PASSWORD=<MYSQL_PASSWORD>
