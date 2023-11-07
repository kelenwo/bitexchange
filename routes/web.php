<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/deposit', [DashboardController::class, 'deposit'])->name('deposit');
    Route::post('/dashboard/deposit', [DashboardController::class, 'saveDeposit']);
    Route::get('/dashboard/deposit-list', [DashboardController::class, 'deposit_list'])->name('deposit_list');
    Route::get('/dashboard/deposit-history', [DashboardController::class, 'deposit_history'])->name('deposit_history');

    Route::get('/dashboard/withdrawal', [DashboardController::class, 'withdrawal'])->name('withdrawal');
    Route::post('/dashboard/withdrawal', [DashboardController::class, 'saveWithdrawal']);
    Route::get('/dashboard/withdrawal-history', [DashboardController::class, 'withdrawal_history'])->name('withdrawal_history');

    Route::get('/dashboard/referral', [DashboardController::class, 'referrals'])->name('referral');
    Route::get('/dashboard/referral-link', [DashboardController::class, 'deposit'])->name('referral_link');
    Route::get('/dashboard/referral-history', [DashboardController::class, 'deposit'])->name('referral_history');

    Route::get('/dashboard/account', [DashboardController::class, 'account'])->name('account');
    Route::post('/dashboard/account', [DashboardController::class, 'updateAccount']);
    Route::get('/dashboard/account-security', [DashboardController::class, 'account_security'])->name('account_security');
    Route::post('/dashboard/get-wallet', [DashboardController::class, 'getWallet'])->name('get_wallet');

});

Route::group(['middleware' => ['auth', 'verified','admin.auth']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/manage-gateway', [AdminController::class, 'gateway'])->name('admin_gateways');
    Route::post('/admin/manage-gateway', [AdminController::class, 'saveGateway']);
    Route::get('/admin/manage-plans', [AdminController::class, 'plan'])->name('admin_plans');
    Route::post('/admin/manage-plans', [AdminController::class, 'savePlan']);
    Route::get('/admin/site-settings', [AdminController::class, 'gateway'])->name('admin_settings');
    Route::get('/admin/deposits', [AdminController::class, 'deposits'])->name('admin_deposits');
    Route::get('/admin/pending-deposits', [AdminController::class, 'pending_deposits'])->name('admin_pending_deposits');
    Route::get('/admin/withdrawals', [AdminController::class, 'withdrawals'])->name('admin_withdrawals');
    Route::get('/admin/pending-withdrawals', [AdminController::class, 'pending_withdrawals'])->name('admin_pending_withdrawals');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin_users');
    Route::get('/admin/user-account', [AdminController::class, 'account'])->name('user.account');
    Route::post('/admin/user-account', [AdminController::class, 'updateAccount']);

});

Route::get('/invite', [IndexController::class, 'invite'])->name('invite');

Route::post('/delete-item', [AdminController::class, 'delete'])->name('delete_item');
Route::post('/process-item', [AdminController::class, 'process'])->name('process_item');

Route::get('/about', [DashboardController::class, 'about'])->name('about');


Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('/');
})->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend-verification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
