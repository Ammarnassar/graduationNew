<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Email\Inbox;
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


Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class , 'login']);

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class , 'register']);

Route::group(['middleware' => 'auth'] , function (){

    Route::prefix('email')->group(function () {
        Route::view('/inbox',  'pages.mail.inbox')->name('inbox');
        Route::view('/send', 'pages.mail.email-compose')->name('send');
        Route::get('/download/{id}', [Inbox::class,'download'])->name('download');
    });

    Route::view('/notifications',  'pages.notification_tab')->name('notifications');
    Route::get('/' , [HomeController::class , 'home'])->name('home');
    Route::get('logout', [AuthController::class , 'logout'])->name('logout');
    Route::get('/profile/{user:name}' , [UserController::class , 'profile'])->name('profile');
});


