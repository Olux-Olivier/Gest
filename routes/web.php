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

Route::post('/register', [ProductController::class,'createProduct']);

//affichage des categopries sur le formulaire registerProduct
Route::get('register', [CategoryController::class, 'index']);

//affichage des suppliers sur le formulaire registerProduct
Route::get('register', [SupplierController::class, 'supplier']);

//creation d'un produit
Route::get('/register', [ProductController::class,'register']); //regsiter product



// Route::get('data', function () {
//     $users = UserController::all();
//     $posts = PostController::all();
//     $comments = CommentController::all();

//     return view('data', compact('users', 'posts', 'comments'));
// });













//Routes des fournissseurs
Route::get('supplier',[SupplierController::class, 'supplier'])->name('supplier'); //list supplier
Route::get('/registerSup', [SupplierController::class,'registerSupplier'])->name('registerSupplier'); //register supplier
Route::post('/registerSup', [SupplierController::class,'createSupplier']); // create supplier

//Route des categories
Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('createCategorie', [CategoryController::class, 'create'])->name('createCategorie');
Route::post('createCategorie', [CategoryController::class, 'store'])->name('store');
