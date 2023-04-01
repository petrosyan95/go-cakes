<?php

use App\Http\Controllers\BasketsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//


Route::controller(ProductsController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/product/{id}', 'show')->name('product-show'); //separately
    Route::get('/search', 'search')->name('search');
});

Route::controller(ProductCategoriesController::class)->group(function () {
    Route::get('/categories/{id?}', 'index')->name('categories'); //category
    Route::get('/special', 'special')->name('special');
});

Route::controller(ReviewsController::class)->group(function () {
    Route::get('/reviews', 'index')->name('reviews'); //inf
    Route::post('/review', 'store')->name('review-store');
});

Route::controller(BasketsController::class)->group(function () {
    Route::get('/basket/{id?}', 'index')->name('basket');
    Route::delete('/basket/{id}', 'destroy')->name('destroy');
});

Route::post('/order', [OrdersController::class, 'store'])->name('order');


