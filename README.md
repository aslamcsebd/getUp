### 1. Build a Simple API with Authentication

- composer create-project laravel/laravel ecommerce
- composer require laravel/sanctum
- php artisan install:api
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- php artisan make:model Product -m
- php artisan make:controller ProductController --api
- php artisan migrate

### 2. Database Optimization & Query Challenge

- User table
- Product category table
- product table
- Order table


- Indexing Strategy
    - Products Table
        - total_sales
        - category_id

    - Orders Table:
        - customer_id
        - order_date

### Add all table seeder (done)

### 3. Implement Role-Based Access Control (RBAC)

- Create some table
    - Permission
    - Role
    - RoleUser
- Create two roles: Admin and Editor.
- php artisan make:trait Traits/ApiResponse
- Use Laravel policies or gates to restrict actions based on roles.


### 4. Implement a Simple Queue for Email Notifications

- php artisan queue:table (jobs table)
- php artisan make:job SendWelcomeEmail
- php artisan make:mail WelcomeEmail
- resources/views/emails/welcome.blade.php
- Start the Queue Worker
    - php artisan queue:work