# Web Programming Lab Work

Laravel-based lab work for the Web Programming course, semester 4 (practicums 6 to 8). The project covers routing, controllers, Eloquent models, and CRUD features for entities such as students, subjects, schedules, and products.

The full practicum report is available at:
https://alfarisaulia.ifportofolio.com/report/report.html

## Covered Topics

- MVC structure in Laravel
- Controllers and resource routing
- Eloquent models and relationships (Student, Subject, Major, Schedule, Product)
- CRUD operations

## Tech Stack

- PHP
- Laravel
- Blade

## Project Structure

The Laravel application lives in the `example-app/` directory:

```
example-app/
  app/Http/Controllers/   Controllers (Student, Mahasiswa, Jadwal, Product, User)
  app/Models/             Eloquent models
  routes/                 Route definitions
  resources/views/        Blade templates
```

## Getting Started

```bash
cd example-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
