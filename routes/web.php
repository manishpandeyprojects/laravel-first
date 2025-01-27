<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('/blogs', BlogController::class);
Route::resource('/products', ProductController::class);


// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::get('/register', [AuthController::class, 'register_view'])->name('register');

Route::get('/login', [AuthController::class, 'index'])->name('login_view');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [AuthController::class, 'register_save'])->name('register_save');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');