<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\userController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('create', [CategoryController:: class,'create']);
Route::post('store',[CategoryController::class,'store'])->name('store');

// Route::get('createproduct', [ProductController:: class,'create']);
// Route::get('indexproduct', [ProductController:: class,'index'])->name('index_product');
// Route::post('storeproduct',[ProductController::class,'store'])->name('store.product');


// Route::get('showCArt', [CartController:: class,'showCArt'])->name('show_cart');
// Route::post('addcart/{id}', [CartController:: class,'addcart'])->name('addcart');

// Route::get('create_user',[userController::class, 'create'])->name('create_user');
// Route::post('store_user',[userController::class, 'store'])->name('store_user');
// Route::get('/show_login', [userController::class, 'showLoginForm'])->name('show_login');
// Route::post('/login', [userController::class, 'login'])->name('login');
// Route::get('index_users',[userController::class, 'index'])->name('index_users');
// Route::get('edit_user/{id}',[userController::class, 'edit'])->name('edit_user');
// Route::post('update_user',[userController::class, 'update'])->name('update_user')->middleware("Role");
// Route::get('delete_user/{id}',[userController::class, 'delete'])->name('delete_user');

// Route::get('cash',[orderController::class, 'cash'])->name('cash');
