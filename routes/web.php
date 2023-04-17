<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WebinarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\ComunityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController as ClassFrontController;
use App\Http\Controllers\WebinarController as WebinarFrontController;
use App\Http\Controllers\ComunityController as ComunityFrontController;

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

//TAMPILAN DEPAN 
Route::group([
    'prefix' => '', 
], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('ensiklopedia', [HomeController::class, 'ensiklopedia']);
    // Route::get('komunitas', [HomeController::class, 'komunitas']);
    Route::get('tentang-kami', [HomeController::class, 'aboutUs']);
    
    
    Route::group([
        'prefix' => '/', 
    ], function () {
        Route::get('komunitas', [ComunityFrontController::class, 'index']);
        // Route::get('list/{id}', [ClassFrontController::class, 'list']);
        // Route::get('detail/{id}', [ClassFrontController::class, 'detail']);
    });
    Route::group([
        'prefix' => 'class', 
    ], function () {
        Route::get('category', [ClassFrontController::class, 'index']);
        Route::get('list/{id}', [ClassFrontController::class, 'list']);
        Route::get('detail/{id}', [ClassFrontController::class, 'detail']);
    });

    Route::group([
        'prefix' => 'webinar', 
    ], function () {
        Route::get('/', [WebinarFrontController::class, 'list']);
        Route::get('detail/{id}', [WebinarFrontController::class, 'detail']);
        // Route::get('/', [WebinarFrontController::class, 'showAll'])->name('webinar');
        // Route::get('webinar-soon', [WebinarFrontController::class, 'showAll'])->name('webinar');
        Route::get('soon', [WebinarFrontController::class, 'showSoon']);
        Route::get('done', [WebinarFrontController::class, 'showDone']);
    });
});


Route::get('login', [AuthController::class, 'index'])->name("login");

Route::group(['prefix' => 'auth/'], function () {
    Route::post('do-login', [AuthController::class, 'doLogin']);

    Route::get("register", [AuthController::class, "register"]);
    Route::post("do-register", [AuthController::class, "doRegister"]);
    Route::get('logout', [AuthController::class, 'doLogout']);
});


// ADMIN MENU
Route::group([
    'prefix' => 'admin', 
    "middleware" => ['auth', 'access:ADMIN']
], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::group([
        'prefix' => 'user', 
    ], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('add', [UserController::class, 'add']);
        Route::post('do-add', [UserController::class, 'doAdd']);
        Route::get('update/{id}', [UserController::class, 'update']);
        Route::post('do-update/{id}', [UserController::class, 'doUpdate']);
        Route::get('do-delete/{id}', [UserController::class, 'doDelete']);
    });

    Route::group([
        'prefix' => 'webinar',
    ], function() {
        Route::get('/', [WebinarController::class,'index']);
        Route::get('add', [WebinarController::class, 'add']);
        Route::post('do-add', [WebinarController::class, 'doAdd']);
        Route::get('update/{id}', [WebinarController::class, 'update']);
        Route::post('do-update/{id}', [WebinarController::class, 'doUpdate']);
        Route::get('do-delete/{id}', [WebinarController::class, 'doDelete']);
    });

    Route::group([
        'prefix' => 'category',
    ], function() {
        Route::get('/', [CategoryController::class,'index']);
        Route::get('add', [CategoryController::class, 'add']);
        Route::post('do-add', [CategoryController::class, 'doAdd']);
        Route::get('update/{id}', [CategoryController::class, 'update']);
        Route::post('do-update/{id}', [CategoryController::class, 'doUpdate']);
        Route::get('do-delete/{id}', [CategoryController::class, 'doDelete']);
    });


    Route::group([
        'prefix' => 'list-class',
    ], function() {
        Route::get('/', [ClassController::class,'index']);
        Route::get('add', [ClassController::class, 'add']);
        Route::post('do-add', [ClassController::class, 'doAdd']);
        Route::get('update/{id}', [ClassController::class, 'update']);
        Route::post('do-update/{id}', [ClassController::class, 'doUpdate']);
        Route::get('do-delete/{id}', [ClassController::class, 'doDelete']);
    });

    Route::group([
        'prefix' => 'comunity',
    ], function() {
        Route::get('/', [ComunityController::class,'index']);
        Route::get('add', [ComunityController::class, 'add']);
        Route::post('do-add', [ComunityController::class, 'doAdd']);
        Route::get('update/{id}', [ComunityController::class, 'update']);
        Route::post('do-update/{id}', [ComunityController::class, 'doUpdate']);
        Route::get('do-delete/{id}', [ComunityController::class, 'doDelete']);
    });
});
