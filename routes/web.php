<?php

use App\Http\Controllers\site\indexController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [indexController::class,'OpenHome'])->name('site.home');
Route::get('/product-detail',[indexController::class,'productDetail'])->name('site.product');
Route::get('/cart',[indexController::class,'openCart'])->name('site.cart');
Route::get('/addCart',[indexController::class,'openAddToCart'])->name('add.to.cart');
Route::get('/checkout',[indexController::class,'openCheckout'])->name('site.checkout');

