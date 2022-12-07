<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Dashboard
Route::get('dashboard', [PostController::class, 'index'])->name('post.index'); 

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::delete('categories/{category}/destroy', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');


