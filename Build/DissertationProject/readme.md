<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation of Project Bazzar
1. To download Project Bazzar from bit bucket run **git clone https://twalkiden@bitbucket.org/twalkiden/final-year-project.git**
in bash
2. Once the project download run **cd final-year-project/Build/DissertationProject** in bash
3. Once in the DissertationProject directory run **composer update**
4. Once composer has finished updating locate the .env.example file within the project and change the name to .env
5. In bash run **php artisan key:generate**
6. open the .env file and change DB_Database to dissertation_database
7. In .env file change DB_USERNAME to root
8. In .env file change DB_PASSWORD=webdev
9. Close .env file
10. Run **php artisan serve** in bash
11. Open internet browser and navigate to localhost:8000/home to make sure the application runs
12. In bash enter **ctrl + c** to stop local host from running

## Installation of Database
1. Open MySQL Workbench
2. Login to local instance with you user name and password
3. If the username and password is not the same as the one in the .env file the .env file needs changing to match
4. click create schema
5. name schema dissertation_database
6. set default collation to utf8 - default collation
7. click apply
8. In bash run **php artisan migrate**
9. If any errors check the .env matches the username, password and name of the database
10. In bash run **php artisan db:seed**

## Run automated test to create content and test the system
1. Run **php artisan serve**
2. In a new bach navigate DissertationProject
3. run **php vendor/bin/codecept run acceptance** in bash
4. The system is now ready to use
5. Make sure php artisan serve is still running in bash
6. In another bash navigate to the directory DissertationProject


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
