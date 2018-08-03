DEMO project estacio fic
=========================

 - change name from .env.example to .env
 - change config/database.php to your information 

copy file base database and change configurarions

```
cp config/_database.php config/database.php
```

copy .env file

```
cp .env.example .env
```

execute this command to install composer package

```
composer install
```

execute command to generate generate key

```
php artisan key:generate
```
 
 execute command to clear cache

 ```
 php artisan cache:clear
 ```

 run server local

 ```
 php artisan serve
 ```