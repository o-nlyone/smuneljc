<?php

use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['guest']], function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [loginController::class, 'login'])->name('login');
    // Route::get('daftar', [DaftarController::class, 'showDaftarForm']);
    Route::get('daftar', function () {
        return view('coming');
    });
    Route::post('daftar', [DaftarController::class, 'daftar']);
    Route::get('list-daftar', [DaftarController::class, 'showlist']);
});

Route::group(['middleware'=> ['auth']], function(){
    Route::get('/logout', [logoutController::class, 'index']);
    Route::get('/dash',   [loginController::class, 'showDashboard']);
});

Route::get('/', function () {
    return view('welcome');
});
