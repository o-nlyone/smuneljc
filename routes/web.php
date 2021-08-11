<?php

use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\DetailController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> ['guest']], function(){
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [loginController::class, 'login'])->name('login');
    Route::get('daftar', [DaftarController::class, 'showDaftarForm']);
    // Route::get('daftar', function () {
    //     return view('coming');
    // });
    Route::post('daftar', [DaftarController::class, 'daftar']);
    Route::post('pincheck', [DaftarController::class, 'pincheck']);
    Route::get('biodata', function ($id) {
        return redirect('https://docs.google.com/forms/d/1HwHP3kw4G82HW5QsZ6EocDpU1rNNs-DEu_cDWHNjy-I/edit');
    });
});

Route::get('manga', [DetailController::class, 'showmanga']);
Route::get('list-daftar', [DaftarController::class, 'showlist']);
Route::post('/updatepeserta', [DaftarController::class, 'updatepeserta']);


Route::group(['middleware'=> ['auth']], function(){
    Route::get('/logout', [logoutController::class, 'index']);
    Route::get('/dash',   [loginController::class, 'showDashboard']);
    Route::post('/deleted',   [loginController::class, 'deleteData']);
    Route::post('/whatsapp', [DetailController::class, 'wamessage']);
    Route::post('/numberwa', [DetailController::class, 'wacontact']);
    Route::post('/code', [DetailController::class, 'securecode']);
    Route::post('/update', [DaftarController::class, 'updateAdmin']);
    Route::get('/print', [LoginController::class, 'printform']);
});

Route::get('/', function () {
    return view('welcome');
});
