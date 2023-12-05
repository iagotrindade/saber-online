<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;

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

Route::middleware(["auth"])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});


Route::middleware(["guest"])->group(function() {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login_action', [AuthController::class, 'loginAction'])->name('login.action');

    Route::get('/verify_login', [AuthController::class, 'verifyLogin'])->name('verify.login');
    Route::post('/verify_login_action', [AuthController::class, 'verifyLoginAction'])->name('verify.login.action');

    Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
    Route::post('/forgot_password_action', [AuthController::class, 'forgotPasswordAction'])->name('forgot.password.action');

    Route::get('/change_password', [AuthController::class, 'changePassword'])->name('password.reset');
    Route::post('/change_password_action', [AuthController::class, 'changePasswordAction'])->name('password.reset.action');
});

