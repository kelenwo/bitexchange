<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    private $user;
    public function __construct() {
        $this->user = Auth::user();
    }
     public function about(): View
    {
        return view('about');
    }
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
        $data = Deposits::where('email', Auth::user()->email)->get();

        return view('dashboard.deposit_list', ['deposits' => $data]);
    }

    public function deposit_history(): View
    {
        return view('dashboard.deposit_history');
    }

    public function saveDeposit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'plan' => 'required',
            'amount' => 'required',
            'method' => 'required',
            'transaction_id' => 'required',
            'receipt' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file validation as needed
        ]);

        // Handle image upload
        if ($request->hasFile('receipt')) {
            $imagePath = $request->file('receipt')->store('images');
        }

        $deposit = new Deposits();
        $deposit->email = Auth::user()->email;
        $deposit->username = Auth::user()->username;
        $deposit->plan = $request->input('plan');
        $deposit->amount = $request->input('amount');
        $deposit->transaction_id = $request->input('transaction_id');
        $deposit->method = $request->input('method');
        $deposit->receipt =  $imagePath?:null;
        $deposit->status = false;

        if ($deposit->save()) {
            Session::flash('success', 'Deposits has been submitted successfully, Pending admin approval');

        }
        else {
            Session::flash('error', 'An error occurred, Make sure all required fields are selected');

        }
        return redirect()->back();

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

}
