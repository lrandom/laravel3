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

Route::get('/', function () {
    $name = 'NIIT';
    $age = 20;
    /* return view('frontend.home', [
         'name' => $name,
         'age' => $age
     ]);*/

    /*return view('frontend.home', compact("name", "age"));*/

    return view('frontend.home')->with('name', $name)->with('age', $age);
});

Route::get('/hello-world', function () {
    echo 'Hello World';
});//callback function // closures

Route::get('/about', function () {
    echo 'About me';
});

/*
Route::get('/admin/user', function () {
    echo '/admin/user';
});
Route::get('/admin/post', function () {
    echo '/admin/post';
});*/

Route::prefix('/admin')->group(function () {
    Route::get('/user', function () {
        echo '/admin/user';
    })->name('admin.user');

    Route::get('/post', function () {
        echo '/admin/post';
    })->name('admin.post');

});

Route::get('/post/{id}/{title}', function ($id, $title) {
    echo $id;
    echo $title;
})->name('post');

