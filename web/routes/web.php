<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('authors', AuthorController::class);
Route::resource('publishers', PublisherController::class);

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index'])->name('product.index');
   
// });
