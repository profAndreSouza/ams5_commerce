<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index'])->name('product.index');
   
// });
