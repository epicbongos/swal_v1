<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeControllerV1::class, 'index'])->name('home');

// Route::get('/swal-v1', [::class, 'index'])->name('home');

Route::get('/login', [HomeController::class, 'index'])->name('login');
Route::get('/login1', [HomeController::class, 'index'])->name('login1');
Route::get('/swal1', [SwalController::class, 'swal1'])->name('swal1');

Auth::routes();

// Route::group(['prefix'=> 'admin']), function(){ }

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

    // Route::group(['middleware' => 'auth'], function () {
    //     Route::get(['/']);
    // });
});