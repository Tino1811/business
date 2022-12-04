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
Route::get('/muro', [PostController::class, 'index'])->name('post.index'); 

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');

Route::get('category/show', [CategoryController::class, 'show'])->name('category.show');

// Product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('products', [ProductController::class, 'store'])->name('products.store');