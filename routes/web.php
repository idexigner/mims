<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Admin routes
use App\Http\Controllers\Admin\GenericController;

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



Route::group(['middleware'=>'guest'],function(){
    Route::get('/adminpanel',[AuthController::class,'index']);
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view']);
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});



Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});



Route::get('/admin/generic', [GenericController::class, 'index'])->name('generic.index');
    Route::post('/admin/generic/store', [GenericController::class, 'store'])->name('generic.store');
    Route::put('/admin/generic/update/{id}', [GenericController::class, 'update'])->name('generic.update');

Route::prefix('admin')->group(function(){

    //Generic Controller Routes
    // Route::prefix('/generic')->name('generic.')->group(function () {
    //     Route::get('/', [GenericController::class, 'index'])->name('index');
    //     Route::post('/store', [GenericController::class, 'store'])->name('store');
    //     Route::put('/update/{id}', [GenericController::class, 'update'])->name('update');
    // });

    

    // Route::get('/', [GenericController::class, 'index'])->name('posts.index');
    // Route::get('/posts', [GenericController::class, 'index'])->name('posts.get');
    // Route::get('/posts/create', 'PostController@create')->name('posts.create');
    // Route::post('/posts', 'PostController@store')->name('posts.store');
    // Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    // Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
    // Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');


    // Route::get('/', 'PostController@index')->name('posts.index');
    // Route::get('/posts', 'PostController@getPosts')->name('posts.get');
    // Route::get('/posts/create', 'PostController@create')->name('posts.create');
    // Route::post('/posts', 'PostController@store')->name('posts.store');
    // Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    // Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
    // Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');
    
});


