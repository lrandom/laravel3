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

Route::get('/clear-old-session', function () {
    \Illuminate\Support\Facades\Session::flush();
});

Route::get('send-mail', function () {
 /*   \Illuminate\Support\Facades\Mail::to(collect(["beginlive@gmail.com", "mmochicken92@gmail.com"]))
        ->send(new \App\Mail\OrderSuccessed("Mail from NIIT"));*/
    \Illuminate\Support\Facades\Mail::to("beginlive@gmail.com")->send(new \App\Mail\OrderCancel());
});

Route::get('run-job', function () {
    dispatch(new \App\Jobs\SendMail());
});
