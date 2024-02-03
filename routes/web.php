<?php

// namespace App\Http\Controllers\Controller;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

Route::get('',function (){
    view('pages.product');
});

//Route::get('store',[\App\Http\Controllers\ProductController::class,'store']);

Route::get('/article',[ProductController::class,'article']);

//Routes des produits
Route::get('product',[ProductController::class, 'product'])->name('product'); //list products
Route::get('/register', [ProductController::class,'register']); //regsiter product
Route::post('/register', [ProductController::class,'createProduct']);



//affichage des categopries sur le formulaire registerProduct
Route::get('register', [CategoryController::class, 'index']);




//Routes des fournissseurs
Route::get('supplier',[SupplierController::class, 'supplier'])->name('supplier'); //list supplier
Route::get('/registerSup', [SupplierController::class,'registerSupplier'])->name('registerSupplier'); //register supplier
Route::post('/registerSup', [SupplierController::class,'createSupplier']); // create supplier

//Route des categories
Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('createCategorie', [CategoryController::class, 'create'])->name('createCategorie');
Route::post('createCategorie', [CategoryController::class, 'store'])->name('store');
