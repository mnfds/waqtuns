<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleController::class, 'handleCallback']);  

Route::view('/', 'dashboard');

Route::view('/produk', 'user.produk')->name('user.produk');

Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::view('/keranjang', 'user.keranjang')->name('user.keranjang');
});

require __DIR__.'/auth.php';
