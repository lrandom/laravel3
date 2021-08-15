<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------Hello World-----------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('listing', [\App\Http\Controllers\ProductListing::class, 'listing']);
Route::get('add-to-cart/{id}', [\App\Http\Controllers\Cart::class, 'addToCart'])->name('addCart');
Route::get('cart', [\App\Http\Controllers\Cart::class, 'getCart']);
Route::get('delete-cart-item/{id}', [\App\Http\Controllers\Cart::class, 'deleteCartItem'])->name('deleteCartItem');
Route::get('update-quantity/{id}/{quantity}', [\App\Http\Controllers\Cart::class, 'updateQuantity'])
    ->name('updateQuantity');
