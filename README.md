### 1. Build a Simple API with Authentication

- composer create-project laravel/laravel ecommerce
- composer require laravel/sanctum
- php artisan install:api
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- php artisan make:model Product -m
- php artisan make:controller ProductController --api
- php artisan migrate