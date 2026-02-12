<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'view'])->name('register');
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'store'])->name('register.store');
