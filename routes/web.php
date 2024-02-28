<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\CategoryController;


use App\Http\Controllers\WebSiteController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

/*--------------------------------- Website Routes ---------------------------------*/


Route::get('/',[WebSiteController::class,'viewIndex'])->name('viewIndex');
Route::get('/blogs',[WebSiteController::class,'viewBlog'])->name('viewBlog');
Route::get('/blog/{slug?}',[WebSiteController::class,'viewBlogInner'])->name('viewBlogInner');
Route::post('/contact-us',[WebSiteController::class,'viewContactUs'])->name('viewContactUs');


/*--------------------------------- Auth Routes ---------------------------------*/

Route::get('/admin/login', [AuthController::class, 'index'])->name('login.view')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

/*--------------------------------- Admin Routes ---------------------------------*/

Route::group(['middleware' => 'auth','prefix'=>'/admin'], function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    /*-------------------------------

     ______________
    |  Resources  |
    ______________
        1: Our Clients
        2: Category
        3: blogs
        4: Our Works
    --------------------------------*/

    Route::resources([
        '/our-clients' => OurClientController::class,
        '/category' => CategoryController::class,
        '/blog' => BlogController::class
    ]);

    /*--------------------------------- File Manager ---------------------------------*/

    Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
  

    

    /*----------------------------------- Meta ---------------------------------*/

    Route::get('/meta', [MetaController::class, 'index'])->name('meta.index');
    Route::get('/meta/{meta}', [MetaController::class, 'edit'])->name('meta.edit');
    Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

});


