<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/about');

// log in
Route::get('/register', [RegisterController::class, 'registerPage'])->name('register');
Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/register', [RegisterController::class, 'registration'])->name('registration');
Route::post('/login', [LoginController::class, 'authorization'])->name('authorization');

// pages
Route::get('/about', function () {
    return view('pages.about');
})->name('aboutPage');

Route::get('/catalog', [ProductController::class, 'catalogPage'])->name('catalogPage');

Route::get('/findus', function () {
    return view('pages.findus');
})->name('findusPage');

Route::get('/conditions', function () {
    return view('pages.conditions');
})->name('conditionsPage');

Route::get('/logout', [WebController::class, 'logout'])->name('logout')->middleware('auth');

// user
Route::get('/user', [UserController::class, 'userPage'])->name('userPage')->middleware('auth');


// admin
Route::get('/admin', [AdminController::class, 'adminPage'])->name('adminPage');
Route::post('/admin/new_category', [AdminController::class, 'putCategory'])->name('putCategory');
Route::post('/admin/remove_category', [AdminController::class, 'removeCategory'])->name('removeCategory');

Route::post('/admin/new_product', [AdminController::class, 'putProduct'])->name('putProduct');
Route::post('/admin/remove_product', [AdminController::class, 'removeProduct'])->name('removeProduct');

// products
Route::get('/product/{id}', [ProductController::class, 'productPage'])->name('productPage');
Route::get('/product/placing/{id_product}', [ProductController::class, 'makeRequest'])->name('makeRequest')->middleware('auth');
Route::post('/product/placing/{id_product}/send', [ProductController::class, 'sendOrder'])->name('sendOrder');