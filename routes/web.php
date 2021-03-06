<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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
})->name('main');

Route::get('/login', function () {
    return view('login');
})
->name('login');

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::view('/', 'admin.index', ['someVariable' => 'someText'])
        ->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

Route::get('/money', [\App\Http\Controllers\Money\MoneyController::class, 'index'])
    ->name('money');

//news
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('news.categories');

Route::get('/newsbycat/{id}', [NewsController::class, 'index'])
    ->where('id', '\d+')
    ->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest', 'prefix' => 'auth', 'as' => 'social.'], function() {
    Route::get('/{network}/redirect', [SocialController::class, 'redirect'])
        ->name('redirect');

    Route::get('/{network}/callback', [SocialController::class, 'callback'])
        ->name('callback');
});
