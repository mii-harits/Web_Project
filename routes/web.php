<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DstnController;

Route::get('/', [DstnController::class, 'index'])
    ->middleware('guest')
    ->name('landing');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/create', function () {
    return view('create');
})->middleware('auth')->name('create');

// === ROUTE RESOURCES ===
Route::middleware('auth')->group(function() {
    Route::get('/stem', [ResourceController::class, 'index'])->name('stem');
    Route::post('/create', [ResourceController::class, 'store'])->name('create.store');

    Route::get('/resources/{id}/edit', [ResourceController::class, 'edit'])->name('resources.edit');
    Route::put('/resources/{id}', [ResourceController::class, 'update'])->name('resources.update');
    Route::delete('/resources/{id}', [ResourceController::class, 'destroy'])->name('resources.destroy'); 
});
