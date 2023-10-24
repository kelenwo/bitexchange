<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class dashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index');
    }

    public function deposit(): View
    {
        return view('dashboard.deposit');
    }

    public function deposit_list(): View
    {
        return view('dashboard.deposit_list');
    }

    public function deposit_history(): View
    {
        return view('dashboard.deposit_history');
    }

    public function withdrawal(): View
    {
        return view('dashboard.withdrawal');
    }

    public function withdrawal_history(): View
    {
        return view('dashboard.withdrawal_history');
    }
    public function account(): View
    {
        return view('dashboard.account');
    }
    public function account_security(): View
    {
        return view('dashboard.account_security');
    }

    public function login(): View
    {
        return view('dashboard.login');
    }

    public function register(): View
    {
        return view('dashboard.register');
    }
}
