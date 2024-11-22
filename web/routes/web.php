<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('categories/reset', [CategoryController::class, 'resetCategoriesTable']);
Route::resource('categories', CategoryController::class);

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/{slug}', [ProductController::class, 'showCategory'])->name('product.category');
});
