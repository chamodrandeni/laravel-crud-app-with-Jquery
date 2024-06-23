<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products');
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('add.products');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update.products');
Route::post('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete.products');


