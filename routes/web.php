<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'registerPage'])->name('registerPage');
Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');

Route::post('/register', [RegisterController::class, 'registration'])->name('registration');
Route::post('/login', [LoginController::class, 'authorization'])->name('authorization');

