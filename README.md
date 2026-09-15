# Harini B - Laravel Developer Portfolio

This is my personal portfolio website built using Laravel and PHP.

## About

I am Harini B, a PHP Laravel Developer with 2+ years of hands-on experience in developing web applications using PHP and Laravel.

## Technologies

* PHP
* Laravel
* MySQL
* HTML
* CSS
* JavaScript
* Bootstrap
* Git

## Features

* Personal portfolio
* About Me
* Skills
* Work Experience
* Projects
* Contact form
* Database integration
* Resume download
* Responsive design

## Local Setup

### 1. Clone the repository

```bash
git clone https://github.com/Am-Harini/portfolio.git
```

### 2. Go to the project directory

```bash
cd portfolio
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Create environment file

```bash
cp .env.example .env
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Configure MySQL

Update the database settings in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations

```bash
php artisan migrate
```

### 8. Start the Laravel application

```bash
php artisan serve
```

The portfolio will then be available locally through the Laravel development server.

## Author

Harini B
