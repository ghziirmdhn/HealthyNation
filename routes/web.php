<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use App\Models\Payment;

// Authentication Routes
Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register.form');
Route::post('/register', [UserAuthController::class, 'register'])->name('user.register');
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserAuthController::class, 'login'])->name('user.login.submit');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');

// Public Pages
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('user.home');
})->name('user.home');

Route::get('/facilities', function () {
    return view('user.facilities');
})->name('facilities');

Route::get('/class', [ClassController::class, 'index'])->name('class.index');
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

// Membership and Payment Routes
Route::get('/membership', function () {
    return view('user.membership');
})->name('membership');

// Payment Flow Routes
Route::get('/payment-details', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/payment/receipt/{id}', [PaymentController::class, 'receipt'])->name('payment.receipt');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
    
    // Add other authenticated routes here
});

// Handle Payment Status
Route::get('/payment/result/{status}', [PaymentController::class, 'paymentResult'])->name('payment.result');