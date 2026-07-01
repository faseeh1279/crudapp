<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('products.index');  
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create'); 
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store'); 