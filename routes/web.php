<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LogoutController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'login'])->name("login");
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

Route::get('/registration', [RegisterController::class,'registration'])->name("registration");
Route::post('/registration', [RegisterController::class, 'registrationSubmit'])->name('registration.submit');

Route::prefix('admin')->namespace('Admin')->group(static function() {
    Route::middleware('admin')->group(static function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/users', [UsersController::class, 'index']);

        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });
});