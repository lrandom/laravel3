<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/section')->group(function () {
    Route::get('/', [SectionController::class, 'list'])->name('section.list');
    Route::get('/delete/{id}', [SectionController::class, 'delete'])->name('section.delete');
    Route::get('/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
    Route::post('/edit', [SectionController::class, 'doEdit'])->name('section.doEdit');
    Route::get('/add', [SectionController::class, 'add'])->name('section.add');
    Route::post('/do-add', [SectionController::class, 'doAdd'])->name('section.doAdd');
});

Route::prefix('admin/question')->group(function () {
    Route::get('/', [QuestionController::class, 'list'])->name('question.list');
    Route::get('/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');
    Route::get('/edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');
    Route::post('/edit', [QuestionController::class, 'doEdit'])->name('question.doEdit');
    Route::get('/add', [QuestionController::class, 'add'])->name('question.add');
    Route::post('/do-add', [QuestionController::class, 'doAdd'])->name('question.doAdd');
});

Route::get('/', [
    BaseController::class,
    'home',
]);

Route::get('/{section_id}', [
    BaseController::class,
    'testDetail',
])->name('ui.test');
