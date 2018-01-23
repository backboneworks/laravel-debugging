# laravel-debugging
Course week 4. Laravel debugging

## About
This application is a simple Laravel application. It stores car manufacturers and their car models.

Car manufacturers and models can be manged by this application.

## Getting started

### 1. Get the code

Open a terminal (command prompt). Navigate to the location you want the repository to be saved, and clone this repository with git. 

```
git clone git@github.com:backboneworks/laravel-debugging.git
```

If you do not have git installed you can get it [here](https://git-scm.com/).

### 2. Install dependencies

Install the composer dependencies with the terminal

```
composer install
```

### 3. Create a database

Create a database for the application (for example with phpmyadmin)

### 4. Configure settings in .env

Copy the `.env.exmple` to `.env`. In this `.env` file you should set up the database (change the following lines)

```
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```

You also need to set an application key. Do this by running the following command

```
php artisan key:generate
```

### 5. Run migrations and seed the database

Run the database migrations (this will create tables) and seed the database (example data will be inserted into the database).

```
php artisan migrate --seed
```
