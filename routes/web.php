<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/profile', [profileController::class, 'index'])->middleware('auth')->name('profile');
Route::get('/event', [eventController::class, 'index'])->middleware('auth')->name('event');

Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'loginsubmit'])->name('login.submit');

Route::get('/logout', [authController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'registersubmit'])->name('register.submit');
