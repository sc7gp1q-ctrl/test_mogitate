<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'product']);
Route::post('/confirm', [ProductController::class, 'confirm']);
Route::post('/thanks', [ProductController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [ProductController::class, 'admin']);
    Route::get('/search', [ProductController::class, 'search']);
    Route::post('/delete', [ProductController::class, 'destroy']);
    Route::post('/export', [ProductController::class, 'export']);
    Route::get('/products/detail/{id}', [ProductController::class, 'show'])
    ->name('products.show');
});
