<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;


Route::apiResource('authors', AuthorController::class);
Route::apiResource('publishers', PublisherController::class);