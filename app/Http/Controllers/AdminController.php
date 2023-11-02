<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }
    public function gateway(): View
    {
        return view('admin.gateway');
    }
    public function deposits(): View
    {
        $data = Deposits::all();

        return view('admin.deposits', ['deposits' => $data]);
    }
    public function withdrawals(): View
    {
        return view('admin.withdrawals');
    }
}
