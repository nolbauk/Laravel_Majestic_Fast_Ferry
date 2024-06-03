<?php

use App\Http\Controllers\controllertujuan;
use App\Http\Controllers\controlleradmin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('loginproses', function () {
    return view('loginproses');
});

Route::get('register', function () {
    return view('register');
});

Route::get('/admin', [Controller::class, 'admin'])->middleware('auth')->name('admin');

Route::middleware(['auth'])->group(function () {
    // tujuan
    Route::get('/tujuanindex', [controllertujuan::class, 'index'])->name('tujuanindex');

    Route::get('/tujuan/tujuancreate', [controllertujuan::class, 'add'])->name('tujuanadd');

    Route::post('/tujuan/tujuancreate', [controllertujuan::class, 'insertdata'])->name('tujuancreate');

    Route::get('/tujuan/tujuanedit/{id}', [controllertujuan::class, 'readdata'])->name('tujuanread');

    Route::post('/tujuan/tujuanedit/{id}', [controllertujuan::class, 'updatedata'])->name('tujuanedit');

    Route::get('/tujuan/{id}', [controllertujuan::class, 'deletedata'])->name('tujuandelete');

    Route::get('/tujuanreport', [controllertujuan::class, 'exportpdf'])->name('tujuanreport');
});


//Authentication
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::post('register', [AuthController::class, 'register']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
