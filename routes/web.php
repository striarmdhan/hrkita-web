<?php

use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\cutiController;
use App\Http\Controllers\fingerprintController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\sppdController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('login', [loginController::class, 'login']);

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [profileController::class, 'index'])->name('profile');
    Route::get('/cuti', [cutiController::class, 'index'])->name('cuti');
    Route::get('/fingerprint', [fingerprintController::class, 'index'])->name('fingerprint');
    Route::get('/sppd', [sppdController::class, 'index'])->name('sppd');
});