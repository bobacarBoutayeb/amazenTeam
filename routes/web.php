<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
    ->name('homepage');

Route::get('/cart', [CartController::class, 'showCart'])
    ->name('cart.show');

Route::post('/order', [CartController::class, 'placeOrder'])
    ->name('order.store');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])
        ->name('index');

    Route::get('/sortedByName', [ProductController::class, 'indexByName'])
        ->name('index-by-name');

    Route::get('/sortedByPrice', [ProductController::class, 'indexByPrice'])
        ->name('index-by-price');

    Route::get('/{product}', [ProductController::class, 'show'])
        ->where('product', '[0-9]+')
        ->name('show')
        ->missing(function () {
            return redirect('/products');
        });
});

Route::prefix('backoffice')->name('backoffice.')->group(function () {
    Route::get('/', [BackofficeController::class, 'homepage'])
        ->name('homepage');

    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/', [BackofficeController::class, 'index'])
            ->name('index');

        Route::get('/create', [BackofficeController::class, 'create'])
            ->name('create');

        Route::post('/', [BackofficeController::class, 'store'])
            ->name('store');

        Route::get('/{product}', [BackofficeController::class, 'show'])
            ->where('product', '[0-9]+')
            ->name('show')
            ->missing(function () {
                return redirect('/products');
            });

        Route::get('/{product}/edit', [BackofficeController::class, 'edit'])
            ->where('product', '[0-9]+')
            ->name('edit')
            ->missing(function () {
                return redirect('/products');
            });

        Route::match(['put', 'patch'], '/{product}', [BackofficeController::class, 'update'])
            ->where('product', '[0-9]+')
            ->name('update')
            ->missing(function () {
                return redirect('/products');
            });

        Route::DELETE('/{product}', [BackofficeController::class, 'destroy'])
            ->where('product', '[0-9]+')
            ->name('destroy')
            ->missing(function () {
                return redirect('/products');
            });

    });
});
