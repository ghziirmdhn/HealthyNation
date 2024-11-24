<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ArticleController;

Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register.form');
Route::post('/register', [UserAuthController::class, 'register'])->name('user.register');

Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserAuthController::class, 'login']);

Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');

Route::middleware('auth')->group(function () {
 
    Route::get('/user/dashboard', function () {
        return view('user.dashboard'); // Buat halaman dashboard user
    })->name('user.dashboard');
    
});

Route::get('/home', function () {
    return view('user.home'); // Buat view ini nanti
})->name('user.home');

Route::get('/facilities', function () {
    return view('user.facilities');
})->name('facilities');

Route::get('/membership', function () {
    return view('user.membership');
})->name('membership');


Route::get('/class', [ClassController::class, 'index'])->name('class.index');
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');


