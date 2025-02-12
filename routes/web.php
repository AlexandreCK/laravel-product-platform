<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return view('home');
});

Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::post('/products/{product}/ratings', [RatingController::class, 'store'])->name('ratings.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::post('/products/{product}/ratings', [RatingController::class, 'store'])->name('ratings.store');
});
