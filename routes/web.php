<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    if(\Illuminate\Support\Facades\Auth::check()) {
        echo \Illuminate\Support\Facades\Auth::user()->email;
        echo \Illuminate\Support\Facades\Auth::user()->name;
    }else{
        echo 'Bạn chưa đăng nhập';
    }
});

Route::get('/orders', function () {

})->middleware(['auth']);

Route::get('/my-login', function () {
    return view('my-login');
});


Route::post('/do-login', function (\Illuminate\Http\Request $request) {
    if (\Illuminate\Support\Facades\Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {
        echo 'Login thành công';
        echo \Illuminate\Support\Facades\Auth::user()->name;
    }else{
        echo 'Login thất bại';
    }
})->name('do-login');


require __DIR__.'/auth.php';
