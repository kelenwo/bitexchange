<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
})->name('/');


Route::group(['middleware' => ['dashboard.auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/deposit', [DashboardController::class, 'deposit'])->name('deposit');
    Route::post('/dashboard/deposit', [DashboardController::class, 'saveDeposit']);
    Route::get('/dashboard/deposit-list', [DashboardController::class, 'deposit_list'])->name('deposit_list');
    Route::get('/dashboard/deposit-history', [DashboardController::class, 'deposit_history'])->name('deposit_history');

    Route::get('/dashboard/withdrawal', [DashboardController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/dashboard/withdrawal-history', [DashboardController::class, 'withdrawal_history'])->name('withdrawal_history');

    Route::get('/dashboard/referral', [DashboardController::class, 'deposit'])->name('referral');
    Route::get('/dashboard/referral-link', [DashboardController::class, 'deposit'])->name('referral_link');
    Route::get('/dashboard/referral-history', [DashboardController::class, 'deposit'])->name('referral_history');

    Route::get('/dashboard/account', [DashboardController::class, 'account'])->name('account');
    Route::get('/dashboard/account-security', [DashboardController::class, 'account_security'])->name('account_security');

});

Route::group(['middleware' => ['admin.auth']], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
});

Route::get('/about', [DashboardController::class, 'about'])->name('about');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'saveRegister']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
