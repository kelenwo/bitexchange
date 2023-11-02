<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Gateways;
use App\Models\Users;
use Exception;
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

    /**
     * @throws Exception
     */
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

        $user = Users::where('email', Auth::user()->email)->first();

        $gateway = Gateways::where('code', $request->input('method'))->first();

        // Handle image upload
        if ($request->hasFile('receipt')) {
            $imagePath = $request->file('receipt')->store('images');
        }
        $randomId = bin2hex(random_bytes(5));

        $deposit = new Deposits();
        $deposit->email()->associate($user);
        $deposit->gateway()->associate($gateway);

        $deposit->plan = $request->input('plan');
        $deposit->amount = $request->input('amount');
        $deposit->transaction_id = $request->input('transaction_id');
        $deposit->receipt =  $imagePath?:null;
        $deposit->status = false;
        $deposit->hash = $randomId;

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

    public function updateAccount(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user = Users::where('email', Auth::user()->email)->first();

        if (!$user) {
            Session::flash('error', 'User not found');
            return redirect()->back();
        }

        $user->name = $request->input('name');
        $user->country = $request->input('country');
        $user->usdt = $request->input('usdt');
        $user->eth = $request->input('eth');
        $user->btc = $request->input('btc');
        $user->bnb = $request->input('bnb');
        $user->trx = $request->input('trx');
        $user->admin = false;

        if ($user->save()) {
            Session::flash('success', 'Account updated successfully.');
            return redirect()->back();
        } else {
            Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
            return redirect()->back();
        }
    }


}
