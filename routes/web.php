<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->middleware('guest')->name('landing');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// === ROUTE RESOURCES ===
Route::middleware('auth')->group(function() {
    Route::get('/stem', [ResourceController::class, 'index'])->name('stem');
    Route::post('/stem', [ResourceController::class, 'store'])->name('stem.store');
});
