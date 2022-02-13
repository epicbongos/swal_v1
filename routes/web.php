<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeControllerV1::class, 'index'])->name('home');

// Route::get('/swal-v1', [::class, 'index'])->name('home');

Route::get('/login', [HomeController::class, 'index'])->name('home');
Auth::routes();