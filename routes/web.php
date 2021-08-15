<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DemoRelationShip;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrmCategoryController;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
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
/*
Route::get('/', function () {
    $name = 'NIIT';
    $age = 20;
    return view('frontend.home', [
         'name' => $name,
         'age' => $age
     ]);

    return view('frontend.home', compact("name", "age"));

    return view('frontend.home')->with('name', $name)->with('age', $age);
});

Route::get('/hello-world', function () {
    echo 'Hello World';
});//callback function // closures

Route::get('/about', function () {
    echo 'About me';
});


Route::get('/admin/user', function () {
    echo '/admin/user';
});
Route::get('/admin/post', function () {
    echo '/admin/post';
});

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
*/
//Route::get('/', 'HomeController@index');
/*Route::get('/', [HomeController::class, 'index']);//Laravel 8
Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/get-contact', [HomeController::class, 'getContact'])->name('contact.get');
*/

Route::get('/', function () {
    return view('frontend.layout');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/get-category', [CategoryController::class, 'getCategory']);
Route::get('/get-one-category', [CategoryController::class, 'getOne']);
Route::get('/get-agg', [CategoryController::class, 'getAggration']);
Route::get('/selection', [CategoryController::class, 'selection']);
Route::get('/inner-join', [CategoryController::class, 'innerJoin']);
Route::get('/left-join', [
    CategoryController::class, 'leftJoin',
]);

Route::get('/right-join', [
    CategoryController::class, 'rightJoin',
]);

Route::get('/insert', [
    CategoryController::class, 'insert',
]);


Route::get('/update', [
    CategoryController::class, 'update',
]);

Route::get('/orm/get-all', [
    OrmCategoryController::class, 'getAll',
]);

Route::get('/orm/get-one', [
    OrmCategoryController::class, 'findOne',
]);

Route::get('/orm/insert', [
    OrmCategoryController::class, 'insert'
]);

Route::get('/orm/update', [
    OrmCategoryController::class, 'update'
]);

Route::get('/orm/soft-delete', [
    OrmCategoryController::class, 'softDelete'
]);

Route::get('/orm/get-only-trashed', [
    OrmCategoryController::class, 'getOnlyTrashed'
]);

Route::get('/orm/restore', [
    OrmCategoryController::class, 'restore'
]);

Route::get('/category/paginate', [
    OrmCategoryController::class, 'paginate',
]);


Route::get('/one-to-one', [
    DemoRelationShip::class, 'oneToOne'
]);

Route::get('/one-to-many', [
    DemoRelationShip::class, 'oneToMany'
]);


Route::get('/many-to-many', [
    DemoRelationShip::class, 'manyToMany'
]);

Route::get('/insert_demo_data', function () {
    for ($i = 0; $i < 3; $i++) {
        $post = new Post();
        $post->title = "Tin tức " . ($i + 1);
        $post->content = "Nội dung tin tức " . ($i + 1);
        $post->keyword = "Keyword tin tức " . ($i + 1);
        $post->save();
    }

    $comment = new Comment();
    $comment->content = "Bình luận ở tin tức 1";
    $comment->commentable_type = Post::class;
    $comment->commentable_id = 1;
    $comment->save();

    $comment = new Comment();
    $comment->content = "Bình luận ở tin tức 1 - Nội dung 2";
    $comment->commentable_type = Post::class;
    $comment->commentable_id = 1;
    $comment->save();


    $comment = new Comment();
    $comment->content = "Bình luận ở sản phẩm 2 - Nội dung 1";
    $comment->commentable_type = Product::class;
    $comment->commentable_id = 2;
    $comment->save();

    $comment = new Comment();
    $comment->content = "Bình luận ở sản phẩm 2 - Nội dung 2";
    $comment->commentable_type = Product::class;
    $comment->commentable_id = 2;
    $comment->save();
});

Route::get('/poly-one', [
    DemoRelationShip::class, 'polyOne',
]);

Route::get('/poly-many', [
    DemoRelationShip::class, 'polyMany',
]);


Route::get('/set-session', [
    \App\Http\Controllers\SessionController::class,
    'setSession'
]);

Route::get('/get-session', [
    \App\Http\Controllers\SessionController::class,
    'getSession'
]);

Route::get('/set-flash-session', [
    \App\Http\Controllers\SessionController::class,
    'setFlashSession'
]);

Route::get('/get-flash-session', [
    \App\Http\Controllers\SessionController::class,
    'getFlashSession'
]);
