<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'view'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginStore'])->name('login.store')->middleware('guest');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout')->middleware('auth');