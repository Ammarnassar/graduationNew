<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [HomeController::class, 'home'])->name('home');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::group(['as' => 'user.'], function () {
            Route::view('/profile/edit', 'user.profile.edit')->name('profile.edit');
            Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
            Route::get('/photos', [UserController::class, 'photos'])->name('photos');
            Route::get('/videos', [UserController::class, 'videos'])->name('videos');
        });

        Route::group(['as' => 'trend.'], function () {
            Route::get('/trends', [TrendController::class, 'index'])->name('index');
            Route::get('/trend/{id}', [TrendController::class, 'show'])->name('show');
        });
    });
});



