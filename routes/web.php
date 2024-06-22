<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about');

// log in
Route::get('/register', [RegisterController::class, 'registerPage'])->name('registerPage');
Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/register', [RegisterController::class, 'registration'])->name('registration');
Route::post('/login', [LoginController::class, 'authorization'])->name('authorization');

// pages
Route::get('/about', function () {
    return view('pages.about');
})->name('aboutPage');

Route::get('/catalog', [ProductController::class, 'catalogPage'])->name('catalogPage');

Route::get('/findus', function () {
    return view('pages.findus');
})->name('pages.findusPage');

Route::get('/logout', [WebController::class, 'logout'])->name('logout')->middleware('auth');


// admin
Route::get('/admin', [AdminController::class, 'adminPage'])->name('adminPage');
Route::post('/admin/new_category', [AdminController::class, 'putCategory'])->name('putCategory');
Route::post('/admin/remove_category', [AdminController::class, 'removeCategory'])->name('removeCategory');

Route::post('/admin/new_product', [AdminController::class, 'putProduct'])->name('putProduct');
Route::post('/admin/remove_product', [AdminController::class, 'removeProduct'])->name('removeProduct');