<?php

use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'showLoginForm'])->name('login');
Route::get('/dashboard', [SessionController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth')->name('logout');
