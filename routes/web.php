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

Route::get('/cart', [Controllers\CartController::class, "displayCart"])
    ->name('cart');

Route::get('/product', [Controllers\ProductController::class, "displayProducts"])
    ->name('displayProducts');

Route::get('/product/{id}', [Controllers\ProductController::class, 'displayID'])
    ->where('id', '[0-9]+')
    ->name('productDetails');
