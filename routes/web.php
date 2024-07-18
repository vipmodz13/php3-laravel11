<?php

use Illuminate\Support\Facades\Route;
use App\Http\AboutController;
use App\Http\NewController;
use App\Http\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])  ;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/xemnhieu', [App\Http\Controllers\NewController::class, 'topView']);
Route::get('/news', [App\Http\Controllers\NewController::class, 'news']);
Route::get('/news/{category_id}', [App\Http\Controllers\NewController::class, 'newsOnCategory']);
Route::get('/new/search', [App\Http\Controllers\NewController::class, 'search']);
Route::get('/tin/{id}', [App\Http\Controllers\NewController::class, 'tin']);


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');


Route::resource('/admin/categories', CategoryController::class);
