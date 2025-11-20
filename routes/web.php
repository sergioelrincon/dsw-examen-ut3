<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/product', [ProductController::class, 'store'])->name('product.store');
