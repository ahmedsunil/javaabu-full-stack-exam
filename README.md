<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/imgs/FotoFoshi%20Logo.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About FotoFoshi

Fotofoshi is a vibrant social media platform that empowers you to share your life's moments through stunning visuals.
Inspired by the best features of popular platforms like Instagram, Fotofoshi offers a user-friendly interface and a vast
community of creative individuals.

## Requirements

Server Requirements:

- Operating System: Ubuntu 18.04 LTS or later, Debian 10 or later, CentOS/RHEL 7 or later, or macOS
- Web Server: Apache or Nginx
- PHP: 8.3 or later (recommended: 8.2 or later)
- Database: MySQL 8
- Composer: For managing dependencies
- Node v20 or later

## How to Install and Run

- Create a database named photofoshi or any name you like
    - Make a copy of .env.example file and rename it to .env and change these values according to your localhost setup

          DB_DATABASE=fotofoshi

          DB_USERNAME=root

          DB_PASSWORD=

- now you can run

      composer install

- when composer installation is over, then you can run

        npm install

- then run

      php artisan migrate --seed 

- finally run the application by running

        npm run dev

## Credentials

- User: admin@example.com
- Password: root
