<?php

use App\Http\Controllers\auth\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('login', [loginController::class, 'login']);

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [profileController::class, 'index'])->name('profile');
});