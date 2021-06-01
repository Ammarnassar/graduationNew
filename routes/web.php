<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrendController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Email\Inbox;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\GroupController;
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
        Route::view('/following',  'user.follow_list.following')->name('following');
        Route::view('/followers',  'user.follow_list.follower')->name('followers');

        Route::view('/search',  'search.index')->name('search');

        Route::view('/notifications',  'user.notifications.index')->name('notifications');

        Route::group(['as' => 'group.'] ,function () {
            Route::view('/create',  'user.group.form')->name('create');
            Route::view('/groups',  'user.group.groups')->name('groups');
            Route::get('/group/{id}', [GroupController::class,'index'])->name('show');
        });

        Route::group(['prefix' => 'email' , 'as' => 'email.'] ,function () {
            Route::view('/inbox',  'pages.mail.inbox')->name('inbox');
            Route::view('/send', 'pages.mail.email-compose')->name('send');
            Route::get('/download/{id}', [Inbox::class,'download'])->name('download');
        });

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

        Route::group(['as' => 'post.'], function () {
            Route::get('/post/{id}', [PostController::class, 'show'])->name('show');
        });

        Route::group(['as' => 'chat.'], function () {
            Route::get('chat', [ChatController::class, 'index'])->name('index');
        });

    });

});





