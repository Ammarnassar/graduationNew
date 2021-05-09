<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

    Route::get('/' , [HomeController::class , 'home'])->name('home');
    Route::get('logout', [AuthController::class , 'logout'])->name('logout');
    Route::get('/profile/{user:name}' , [UserController::class , 'profile'])->name('profile');
});


