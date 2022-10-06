<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index']);
Route::get('product/{slug}',[ProductController:: class, 'show']);

Route::post('/add_to_cart',[ProductController:: class, 'addToCart']);

// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/blog',[BlogController:: class, 'index']);
Route::get('post/{slug}',[BlogController:: class, 'show']);


Route::get('/login',[UserController::class,'login'])->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);


Route::get('/register',[UserController:: class, 'create'])->middleware('guest');
Route::post('/register',[UserController:: class, 'store']);

Route::post('/logout',[Usercontroller:: class, 'logout']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

