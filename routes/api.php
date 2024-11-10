<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('products', ProductController::class);

    Route::get('/total_sales', [OrderController::class, 'total_sales']);
    Route::get('/latest_orders', [OrderController::class, 'latest_orders']);  
    Route::get('/specific_custom_order/{id}', [OrderController::class, 'specific_custom_order']);  
      
});
