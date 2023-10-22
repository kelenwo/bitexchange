<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/deposit', [dashboardController::class, 'deposit'])->name('deposit');
Route::get('/dashboard/deposit-list', [dashboardController::class, 'deposit_list'])->name('deposit_list');
Route::get('/dashboard/deposit-history', [dashboardController::class, 'deposit_history'])->name('deposit_history');

Route::get('/dashboard/withdrawal', [dashboardController::class, 'withdrawal'])->name('withdrawal');
Route::get('/dashboard/withdrawal-history', [dashboardController::class, 'withdrawal_history'])->name('withdrawal_history');

Route::get('/dashboard/referral', [dashboardController::class, 'deposit'])->name('referral');
Route::get('/dashboard/referral-link', [dashboardController::class, 'deposit'])->name('referral_link');
Route::get('/dashboard/referral-history', [dashboardController::class, 'deposit'])->name('referral_history');

Route::get('/dashboard/account', [dashboardController::class, 'account'])->name('account');
Route::get('/dashboard/account-security', [dashboardController::class, 'account_security'])->name('account_security');
