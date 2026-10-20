<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google');

Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/', function () {
    return view('auth.ingresar');
});

Route::get('/login', function () {
    return view('auth.ingresar');
})->name('login');

Route::get('/register', function () {
    return view('auth.registrarse');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.recuperacion');
})->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.restaurar', ['token' => $token]);
})->name('password.reset');



Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');