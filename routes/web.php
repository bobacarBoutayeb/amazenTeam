<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Controllers\HomeController::class)
    ->name('index');

Route::get('/cart', [Controllers\CartController::class, "showCart"])
    ->name('cart.show');

Route::post('/order', [Controllers\CartController::class, "placeOrder"])
    ->name('order.store');

Route::get('/products', [Controllers\ProductController::class, "showAllByName"])
    ->name('products.showByName');

Route::get('/products/asc', [Controllers\ProductController::class, "showAllByPrice"])
    ->name('products.showByPrice');

Route::get('/products/{id}', [Controllers\ProductController::class, 'showOneById'])
    ->where('id', '[0-9]+')
    ->name('products.showOneById');
