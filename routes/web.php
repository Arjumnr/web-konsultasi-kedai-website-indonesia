<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController as Auths;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/auth/login', [Auths::class, 'index']);
Route::post('/auth/login', [Auths::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('konsultasi', KonsultasiController::class);
    Route::resource('user', UserController::class);

    Route::get('/logout', [Auths::class, 'logout'])->name('logout');
});
