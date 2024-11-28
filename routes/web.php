<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use App\Models\Payment;

// Redirect root to home
Route::get('/', function () {
    return redirect('/home');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Show auth page with login/register form
    Route::get('/login', function () {
        return view('auth.auth');
    })->name('user.login');
    
    Route::get('/register', function () {
        return view('auth.auth');
    })->name('user.register');

    // Process auth actions
    Route::post('/login', [UserAuthController::class, 'login'])->name('user.login.post');
    Route::post('/register', [UserAuthController::class, 'register'])->name('user.register.post');
});

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/profile', [UserAuthController::class, 'profile'])->name('profile');
    Route::get('/settings', [UserAuthController::class, 'settings'])->name('settings');
    
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

// Public Pages
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

Route::get('/payment-details', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/payment/receipt/{id}', [PaymentController::class, 'receipt'])->name('payment.receipt');
Route::get('/payment/result/{status}', [PaymentController::class, 'paymentResult'])->name('payment.result');