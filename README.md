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

## firebase
```composer require kreait/laravel-firebase```

Next, enable kreait/firebase-php's service provider by opening config/app.php and adding the following code in the providers element of the "Package Service Providers" section.

```Kreait\Laravel\Firebase\ServiceProvider::class```

[tutorial](https://www.twilio.com/blog/create-restful-crud-api-php-using-laravel-google-firebase#:~:text=To%20access%20Firebase%20in%20Laravel,which%20also%20supports%20Lumen%20projects.)


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<MYSQL_DATABASE>
DB_USERNAME=<MYSQL_USER>
DB_PASSWORD=<MYSQL_PASSWORD>
