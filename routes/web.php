<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about');

Route::get('/register', [RegisterController::class, 'registerPage'])->name('registerPage');
Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');

Route::post('/register', [RegisterController::class, 'registration'])->name('registration');
Route::post('/login', [LoginController::class, 'authorization'])->name('authorization');

Route::get('/about', function () {
    return view('pages.about');
})->name('aboutPage');

Route::get('/catalog', function () {
    return view('pages.catalog');
})->name('catalogPage');

Route::get('/findus', function () {
    return view('pages.findus');
})->name('pages.findusPage');

Route::get('/logout', [WebController::class, 'logout'])->name('logout')->middleware('auth');
