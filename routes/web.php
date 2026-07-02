<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('products.index');  
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create'); 
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store'); 
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/viewDetail', [ProductController::class, 'viewProductsDetail'])->name('products.viewDetail');
// Pagination Route 
Route::get('/product/pagination/{pageNumber}/', [ProductController::class, 'pagination'])->name('products.pagination');


// Categories Routes 
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); 
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create'); 
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store'); 
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update'); 
Route::delete('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::post('/categories/search', [CategoryController::class, 'search'])->name('categories.search');


// use Illuminate\Support\Facades\Route;

// Users Api Endpoint Controllers 
Route::get('/users', 'UserController@index'); 
Route::get('/users/welcome', 'UserController@welcome'); 