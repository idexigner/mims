<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;


// Admin routes
use App\Http\Controllers\Admin\GenericController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DosageFormController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PacksizeController;
use App\Http\Controllers\Admin\SpecialReportController;
use App\Http\Controllers\Admin\StrengthController;
use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\AddressCategoryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\SiteSettingController;





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



    // Route::get('/admin/generic', [GenericController::class, 'index'])->name('generic.index');
    // Route::post('/admin/generic/store', [GenericController::class, 'store'])->name('generic.store');
    // Route::put('/admin/generic/update', [GenericController::class, 'update'])->name('generic.update');
    // Route::get('/admin/generic/edit/{id}', [GenericController::class, 'edit'])->name('generic.edit');
    // Route::delete('/admin/generic/destroy/{id}', [GenericController::class, 'destroy'])->name('generic.destroy');

Route::prefix('/admin')->group(function(){

    // Generic Controller
    Route::prefix('/generic')->name('generic.')->group(function(){
        Route::get('/', [GenericController::class, 'index'])->name('index');
        Route::post('/store', [GenericController::class, 'store'])->name('store');
        Route::put('/update', [GenericController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [GenericController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [GenericController::class, 'destroy'])->name('destroy');
    });


    //Brand Controller
    Route::prefix('/brand')->name('brand.')->group(function(){
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::post('/store', [BrandController::class, 'store'])->name('store');
        Route::put('/update', [BrandController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
    });

    // Manufacturer Controller
    Route::prefix('/manufacturer')->name('manufacturer.')->group(function(){
        Route::get('/', [ManufacturerController::class, 'index'])->name('index');
        Route::post('/store', [ManufacturerController::class, 'store'])->name('store');
        Route::put('/update', [ManufacturerController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [ManufacturerController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [ManufacturerController::class, 'destroy'])->name('destroy');
    });

    // DosageForm Controller
    Route::prefix('/dosageform')->name('dosageform.')->group(function(){
        Route::get('/', [DosageFormController::class, 'index'])->name('index');
        Route::post('/store', [DosageFormController::class, 'store'])->name('store');
        Route::put('/update', [DosageFormController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [DosageFormController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [DosageFormController::class, 'destroy'])->name('destroy');
    });

    // Strength Controller
    Route::prefix('/strength')->name('strength.')->group(function(){
        Route::get('/', [StrengthController::class, 'index'])->name('index');
        Route::post('/store', [StrengthController::class, 'store'])->name('store');
        Route::put('/update', [StrengthController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [StrengthController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [StrengthController::class, 'destroy'])->name('destroy');
    });

    // Packsize Controller
    Route::prefix('/packsize')->name('packsize.')->group(function(){
        Route::get('/', [PacksizeController::class, 'index'])->name('index');
        Route::post('/store', [PacksizeController::class, 'store'])->name('store');
        Route::put('/update', [PacksizeController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [PacksizeController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [PacksizeController::class, 'destroy'])->name('destroy');
    });

    // Job Controller
    Route::prefix('/job')->name('job.')->group(function(){
        Route::get('/', [JobController::class, 'index'])->name('index');
        Route::post('/store', [JobController::class, 'store'])->name('store');
        Route::post('/update', [JobController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [JobController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [JobController::class, 'destroy'])->name('destroy');
    });

    // Journal Controller
    Route::prefix('/journal')->name('journal.')->group(function(){
        Route::get('/', [JournalController::class, 'index'])->name('index');
        Route::post('/store', [JournalController::class, 'store'])->name('store');
        Route::post('/update', [JournalController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [JournalController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [JournalController::class, 'destroy'])->name('destroy');
    });

     // News Controller
     Route::prefix('/news')->name('news.')->group(function(){
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::post('/update', [NewsController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('destroy');
    });

     // Special Report Controller
     Route::prefix('/special_report')->name('special_report.')->group(function(){
        Route::get('/', [SpecialReportController::class, 'index'])->name('index');
        Route::post('/store', [SpecialReportController::class, 'store'])->name('store');
        Route::post('/update', [SpecialReportController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [SpecialReportController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [SpecialReportController::class, 'destroy'])->name('destroy');
    });

    // Address Controller
    Route::prefix('/address')->name('address.')->group(function(){
        Route::get('/', [AddressController::class, 'index'])->name('index');
        Route::post('/store', [AddressController::class, 'store'])->name('store');
        Route::post('/update', [AddressController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [AddressController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [AddressController::class, 'destroy'])->name('destroy');
        Route::post('/category/store', [AddressController::class, 'store_category'])->name('category.store');
        Route::get('/category/fetch', [AddressController::class, 'fetch_category'])->name('category.fetch');

    });

    // Video Controller
    Route::prefix('/video')->name('video.')->group(function(){
        Route::get('/', [VideoController::class, 'index'])->name('index');
        Route::post('/store', [VideoController::class, 'store'])->name('store');
        Route::put('/update', [VideoController::class, 'update'])->name('update');
        Route::get('/edit/{id}', [VideoController::class, 'edit'])->name('edit');
        Route::delete('/destroy/{id}', [VideoController::class, 'destroy'])->name('destroy');
    });

    Route::get('/scroller', [SiteSettingController::class, 'scroller'])->name('scroller');
    Route::post('/scroller/update', [SiteSettingController::class, 'scroller_update'])->name('scroller.update');

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



Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return 'Storage link created successfully.';
});