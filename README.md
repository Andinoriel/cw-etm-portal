<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# cw-etm-portal

## About

This project is a very simple website that provides interaction with various educational and methodological manuals of university teachers.

## Installation and using

This project provides you a environment without requiring you to install PHP, a web server, and any other server software on your local machine. For this, it requires Docker and Docker Compose.

1. Install [docker](https://docs.docker.com/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/);
2. Clone this project and then cd to the project folder;
3. Run the initial build of the environment:
```
docker-compose build
```
4. Install all composer and npm dependencies:
```
docker-compose run --rm composer i
docker-compose run --rm npm i
```
5. Run the application using the command:
```
docker-compose up -d --build nginx phpmyadmin
```
6. Create your own .env file by copying .env.example:
```
cp src/.env.example src/.env
```
7. Generate the unique application key:
```
docker-compose run --rm artisan key:generate
```
8. Now create the database:
```
docker-compose run --rm artisan db:create
```
9. Then run migrations and seeds, which will create the necessary db data:
```
docker-compose run --rm artisan migrate
docker-compose run --rm artisan db:seed --class=PermissionsSeeder
docker-compose run --rm artisan db:seed --class=SuperAdminSeeder
```
10. Create a symlink for storing public data:
```
docker-compose run --rm artisan storage:link
```
11. You've done! Main page is available on http://localhost, phpMyAdmin - http://localhost:3309


## Other

If necessary, you can independently use composer, artisan or npm with the following commands:
```
docker-compose run --rm composer ...
docker-compose run --rm artisan ...
docker-compose run --rm npm ...
```

## License

This project is licensed under the [GPL-3.0 License](LICENSE).

## Afterwords

I sincerely apologize for the monstrous naming of commits)
