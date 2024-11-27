<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Controllers\PaymentController;

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

Route::get('/class', [ClassController::class, 'index'])
->name('class.index');

Route::get('/article', [ArticleController::class, 'index'])
->name('article.index');


Route::get('/payment', function () {
    return view('payment.form');
});

Route::post('/process-payment', function (Request $request) {
    // validasi request
    $request->validate([
        'amount' => 'required|numeric',
        'method' => 'required|string',
    ]);

    // save payment ke database
    Payment::create([
        'amount' => $request->input('amount'),
        'method' => $request->input('method'),
    ]);

    return redirect('/')->with('success', 'Payment has been processed successfully!');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/payment-details', [PaymentController::class, 'showPaymentForm']);
Route::post('/process-payment', [PaymentController::class, 'processPayment']);

Route::get('/payment', [PaymentController::class, 'create']);
Route::post('/payment', [PaymentController::class, 'store']);
Route::get('/receipt/{id}', [PaymentController::class, 'receipt']);
Route::get('/payment/receipt/{id}', [PaymentController::class, 'receipt'])->name('payment.receipt');

