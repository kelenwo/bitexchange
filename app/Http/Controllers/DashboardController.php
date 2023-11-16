<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Fields;
use App\Models\Gateways;
use App\Models\Plans;
use App\Models\Referrals;
use App\Models\Users;
use App\Models\Wallets;
use App\Models\Withdrawals;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DashboardController extends Controller
{
     public function about(): View
    {
        return view('about');
    }
    public function index(): View
    {
        $this->updateWallet();

        $wallet = Wallets::where('user_id', Auth::user()->id)->sum('amount');
        $deposit = Deposits::where('user_id', Auth::user()->id)->get();
        $wallet += $deposit->sum('amount') + $deposit->sum('profit');
        $referrals = Referrals::where('referral_id', Auth::user()->id)->sum('amount');
        $withdrawals = Withdrawals::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');

        return view('dashboard.index',['wallet' => $wallet, 'referrals' => $referrals, 'withdrawals' => $withdrawals, 'profit' => $deposit->sum('profit')]);
    }

    public function deposit(): View
    {
        $gateways = Gateways::all();
        $plans = Plans::all();

        return view('dashboard.deposit', ['gateways' => $gateways, 'plans' => $plans]);
    }

    public function deposit_list(): View
    {
        $data = Deposits::where('user_id', Auth::user()->id)->where('status', true)->get();
        $total = Deposits::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.deposit_list', ['deposits' => $data, 'total' => $total]);
    }

    public function deposit_history(): View
    {
        $data = Deposits::where('user_id', Auth::user()->id)->get();
        $total = Deposits::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.deposit_history', ['deposits' => $data, 'total' => $total]);
    }

    public function referrals(): View
    {
        $data = Referrals::where('referral_id', Auth::user()->id)->get();
        $total = Referrals::where('referral_id', Auth::user()->id)->sum('amount');
        return view('dashboard.referrals', ['referrals' => $data, 'total' => $total]);
    }

    /**
     * @throws Exception
     */
    public function saveDeposit(Request $request): RedirectResponse
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
        $plan = Plans::where('name', $request->input('plan'))->first();

        $imagePath = null;

        if ($request->hasFile('receipt')) {
            $imagePath = $request->file('receipt')->store('images');
        }

        $randomId = bin2hex(random_bytes(5));

        $deposit = new Deposits();
        $deposit->user()->associate($user);
        $deposit->gateway()->associate($gateway);
        $deposit->plan()->associate($plan);

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
        $gateways = Gateways::all();
        $plans = Plans::all();
        $wallet = Wallets::where('user_id', Auth::user()->id)->sum('amount');
        $deposit = Deposits::where('user_id', Auth::user()->id)->get();
        $referrals = Referrals::where('referral_id', Auth::user()->id)->sum('amount');
        $wallet += $deposit->sum('amount') + $deposit->sum('profit') + $referrals;

        $total = Wallets::where('user_id', Auth::user()->id)->sum('amount');

        return view('dashboard.withdrawal', ['gateways' => $gateways, 'plans' => $plans, 'total' => $total, 'wallet' => $wallet]);
    }

    public function saveWithdrawal(Request $request): RedirectResponse
    {

        // Validate the form data
        $request->validate([
            'amount' => 'required',
            'method' => 'required',
            'wallet' => 'required',
        ]);

        $user = Users::where('email', Auth::user()->email)->first();
        $gateway = Gateways::where('code', $request->input('method'))->first();
        $randomId = bin2hex(random_bytes(5));

        $deposit = new Withdrawals();
        $deposit->user()->associate($user);
        $deposit->gateway()->associate($gateway);

        $deposit->amount = $request->input('amount');
        $deposit->status = false;
        $deposit->hash = $randomId;

        if ($deposit->save()) {
            Session::flash('success', 'Withdrawal has been submitted successfully, Pending admin approval');
        }
        else {
            Session::flash('error', 'An error occurred, Make sure all required fields are selected');
        }
        return redirect()->back();

    }

    public function withdrawal_history(): View
    {
        $withdrawal = Withdrawals::where('user_id', Auth::user()->id)->get();
        $total = Withdrawals::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.withdrawal_history', ['withdrawals' => $withdrawal, 'total' => $total]);
    }
    public function account(): View
    {
        $gateways = Gateways::all();
        return view('dashboard.account', ['gateways' => $gateways]);
    }
    public function account_security(): View
    {
        return view('dashboard.account_security');
    }

    public function updateAccount(Request $request): RedirectResponse
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
        $user->admin = false;

        foreach ($request->input('gateway') as $key => $value) {

            $gateway = Gateways::where('code',$key)->first();

            if($gateway) {

                $fields = Fields::where('user_id', Auth::user()->id)->where('gateway_id',$gateway->id)->first();
                if (!$fields) {
                    $fields = new Fields();
                    $fields->value = $value;
                    $fields->gateway()->associate($gateway);
                    $fields->user()->associate($user);
                }
                else {
                    $fields->value = $value;
                }

                $fields->save();

            }

        }

        if ($user->save()) {
            Session::flash('success', 'Account updated successfully.');
        }
        else {
            Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
        }
        return redirect()->back();

    }

    public function getWallet(Request $request): JsonResponse
    {
        $gateway = Gateways::where('code',$request->input('gateway'))->first();

        $field = Fields::where('gateway_id',$gateway->id)->first();

        if($field && $field->value) {
            $responseData = [
                'status' => 200,
                'wallet' => $field->value,
            ];
        }
        else {
            $responseData = [
                'status' => 404,
            ];
        }


        return response()->json($responseData);
    }

    public function getDepositWallet(Request $request): JsonResponse
    {
        $gateway = Gateways::where('code',$request->input('gateway'))->first();

        $field = Fields::where('settings', true)->where('gateway_id',$gateway->id)->first();

        if($field && $field->value) {
            $responseData = [
                'status' => 200,
                'wallet' => $field->value,
                'qrcode' => strval(QrCode::size(150)->generate($field->value)),

            ];
        }
        else {
            $responseData = [
                'status' => 404,
            ];
        }


        return response()->json($responseData);
    }

    public function updateWallet(): void
    {

        $deposits = Deposits::where('user_id', Auth::user()->id)->get();

        foreach ($deposits as $deposit) {

            $today = Carbon::now();
            $currentDate = Carbon::parse($today);

            $created_at = Carbon::parse($deposit->created_at);
            $diff = $created_at->diffInDays($currentDate);

            if ($deposit->profit_updated_at) {
                $profit_updated_at = Carbon::parse($deposit->profit_updated_at);
            } else {
                $profit_updated_at = $created_at;
            }

            if ($diff <= $deposit->plan->duration) {
                if ($currentDate->greaterThan($profit_updated_at)) {
                    $diff_days = $currentDate->diffInDays($profit_updated_at);

                    if ($deposit->profit < ($deposit->amount * $deposit->plan->roi / 100) * $deposit->plan->duration) {

                        $daily_profit = $deposit->amount * $deposit->plan->roi / 100;

                        $amount = number_format($daily_profit * $diff_days, 2);
                        $deposit->profit += $amount;
                        $deposit->profit_updated_at = $today;

                        if ($diff == $deposit->plan->duration) {

                            $user = $deposit->user;
                            $user->wallet->amount += $deposit->profit + $deposit->amount;
                            $user->wallet->save();

                        }
                    }
                    $deposit->save();
                }
            }

        }
    }

}
