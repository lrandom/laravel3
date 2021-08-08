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

Route::get('/demo-collection/each', function () {
    /*$data = collect([1,2,3,4,5]);
    $data->each(function ($item,$index){
        echo $index;
        echo $item;
        echo '<br>';
    });

    function each($items,$fnc){
        for ($i = 0; $i < count($items); $i++) {
            $fnc($items[$i],$i);
        }
    }

    each([1,2,3,4,5,6],function ($iem,$i){

    });*/

    //demo về map

    /*$data = collect([1, 2, 3, 4]);
    $data = $data->map(function ($item){
        return $item*2;
    });
    dd($data->all());*/

    /*$data = collect([
        [
            'name' => 'Luan'
        ],
        [
            'name' => 'Nam'
        ]
    ]);

    $newData = $data->pluck('name');
    dd($newData->all());*/

    /*$data = collect([4, 2, 3, 7, 8]);
    $filterData = $data->filter(function ($item) {
        return $item > 4;
    });
    dd($filterData->all());*/

   /* $data = collect(["Nam", "Ninh", "Luan", "An"]);
    $filterName = $data->filter(function ($item) {
        return substr($item, 0, 1) === 'N';
    });
    dd($filterName->all());*/

    /*$data = collect([
        [
            0, 1, 2, 3
        ],
        [
            1, 4, 5, 6
        ]
    ]);

    $flattenData = $data->flatten(true);
    dd($flattenData->all());*/


    $data = collect([1, 2, 3, 4]);
    $incrementData = $data->incrementTen();
    dd($incrementData->all());
});

