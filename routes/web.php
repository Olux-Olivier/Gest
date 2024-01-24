<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('store',[\App\Http\Controllers\ProductController::class,'store']);

Route::get('/article',[\App\Http\Controllers\ProductController::class,'article']);
Route::get('product',[\App\Http\Controllers\ProductController::class, 'product'])->name('product');

Route::get('/register', [\App\Http\Controllers\ProductController::class,'register']);
Route::post('/register', [\App\Http\Controllers\ProductController::class,'createProduct']);
