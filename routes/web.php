<?php

use App\Http\Controllers\AuthController;
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


// Dashboard
Route::get('/', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');

// Registration
Route::get('/register', [AuthController::class, 'signUpScreen'])->name('signUp');
Route::post('/register', [AuthController::class, 'signUp'])->name('signUpProcess');

// Login
Route::get('/login', [AuthController::class, 'loginScreen'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginProcess');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
