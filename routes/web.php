<?php

use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['guest']], function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [loginController::class, 'login'])->name('login');
    Route::get('daftar', [DaftarController::class, 'showDaftarForm']);
    Route::post('daftar', [DaftarController::class, 'daftar']);
    Route::get('list-daftar', [DaftarController::class, 'showlist']);
});

Route::group(['middleware'=> ['auth']], function(){
    Route::get('/logout', [logoutController::class, 'index']);
    Route::get('/dash',   [loginController::class, 'showDashboard']);
});

Route::get('/', function () {
    return view('coming');
    $filecounter=("counter.txt");
    $kunjungan=file($filecounter);
    $kunjungan[0]++;
    $file=fopen($filecounter,"w");
    fputs($file,"$kunjungan[0]");
    fclose($file);
});
