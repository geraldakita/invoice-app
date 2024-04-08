<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Registration
Route::get('/signup', [AuthController::class, 'signUpScreen'])->name('signUp');
Route::post('/signup', [AuthController::class, 'signUp'])->name('signUpProcess');

// Login
Route::get('/login', [AuthController::class, 'loginScreen'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginProcess');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
