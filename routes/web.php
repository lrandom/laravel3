<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/category')->group(function () {
    Route::get('/', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/edit', [CategoryController::class, 'doEdit'])->name('category.doEdit');
    Route::get('/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('/do-add', [CategoryController::class, 'doAdd'])->name('category.doAdd');
});

Route::prefix('admin/post')->group(function () {
    Route::get('/', [PostController::class, 'list'])->name('post.list');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/edit', [PostController::class, 'doEdit'])->name('post.doEdit');
    Route::get('/add', [PostController::class, 'add'])->name('post.add');
    Route::post('/do-add', [PostController::class, 'doAdd'])->name('post.doAdd');
});
