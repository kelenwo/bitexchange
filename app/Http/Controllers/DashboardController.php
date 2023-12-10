<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Fields;
use App\Models\Gateways;
use App\Models\Investments;
use App\Models\Plans;
use App\Models\Referrals;
use App\Models\Transaction;
use App\Models\Users;
use App\Models\Wallets;
use App\Models\Withdrawals;
use App\Notifications\EmailAlerts;
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

        $wallet = Wallets::where('user_id', Auth::user()->id)->first();

        return view('dashboard.index',['wallet' => $wallet->amount, 'withdrawals' => $wallet->withdrawals, 'investments' => $wallet->investments, 'profit' => $wallet->earnings]);
    }

    public function deposit(): View
    {
        $gateways = Gateways::all();

        return view('dashboard.deposit', ['gateways' => $gateways]);
    }

    public function deposit_history(): View
    {
        $data = Deposits::where('user_id', Auth::user()->id)->get();
        $total = Deposits::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.deposit_history', ['deposits' => $data, 'total' => $total]);
    }

    public function investment(): View
    {
        $wallet = Wallets::where('user_id', Auth::user()->id)->first();
        $gateways = Gateways::all();
        $plans = Plans::all();

        return view('dashboard.investment', ['gateways' => $gateways, 'plans' => $plans, 'wallet' => $wallet]);
    }

    public function investment_list(): View
    {
        $data = Investments::where('user_id', Auth::user()->id)->where('status', true)->get();
        $total = Investments::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.investment_list', ['investments' => $data, 'total' => $total]);
    }

    public function investment_history(): View
    {
        $data = Investments::where('user_id', Auth::user()->id)->get();
        $total = Investments::where('user_id', Auth::user()->id)->where('status', true)->sum('amount');
        return view('dashboard.investment_history', ['investments' => $data, 'total' => $total]);
    }

    public function transactions(): View
    {
        $data = Transaction::where('user_id', Auth::user()->id)->get();
        return view('dashboard.transactions', ['transactions' => $data]);
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
            'amount' => 'required',
            'method' => 'required',
//            'transaction_id' => 'required',
            'receipt' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file validation as needed
        ]);

        $user = Users::where('email', Auth::user()->email)->first();
        $gateway = Gateways::where('code', $request->input('method'))->first();

        $imagePath = null;

        if ($request->hasFile('receipt')) {
            $imagePath = $request->file('receipt')->store('images');
        }

        $randomId = bin2hex(random_bytes(5));

        $deposit = new Deposits();
        $deposit->user()->associate($user);
        $deposit->gateway()->associate($gateway);

        $deposit->amount = $request->input('amount');
        $deposit->transaction_id = 'N/A';
        $deposit->receipt =  $imagePath?:null;
        $deposit->status = false;
        $deposit->hash = strtoupper($randomId);

        if ($deposit->save()) {
            Session::flash('success', 'Deposit has been submitted successfully, Pending admin approval');
            $customTitle = 'Deposit Successful';
            $customMessage = 'Your Deposit has been submitted successfully, Pending admin approval.';
            $user = auth()->user();
            $user->notify(new EmailAlerts($customMessage,$customTitle));
        }
        else {
            Session::flash('error', 'An error occurred, Make sure all required fields are selected');
        }
        return redirect()->back();

    }

    public function saveInvestment(Request $request): RedirectResponse
    {

        // Validate the form data
        $request->validate([
            'plan' => 'required',
            'amount' => 'required',
//            'transaction_id' => 'required',
        ]);

        $user = Users::where('email', Auth::user()->email)->first();
        $plan = Plans::where('name', $request->input('plan'))->first();

        $wallet = Wallets::where('user_id',$user->id)->first();

        if(floatval($wallet->amount) < floatval($request->input('amount'))) {
            Session::flash('error', 'Insufficient funds, Kindly deposit to invest');
        }
        elseif(floatval($plan->min) > floatval($request->input('amount'))) {
            Session::flash('error', 'Investment amount should not be less than €' .$plan->min . ' for '. $plan->name);
        }
        elseif(floatval($plan->max) < floatval($request->input('amount'))) {
            Session::flash('error', 'Investment amount should not higher than €' .$plan->max. ' for '. $plan->name);
        }
        else {

            $randomId = bin2hex(random_bytes(5));

            $deposit = new Investments();
            $deposit->user()->associate($user);
            $deposit->plan()->associate($plan);

            $deposit->amount = $request->input('amount');
            $deposit->status = true;
            $deposit->hash = strtoupper($randomId);
            $deposit->profit_updated_at = Carbon::now();
            $deposit->profit = 0.00;

            if ($deposit->save()) {
                $wallet->investments += $request->input('amount');
                $wallet->save();

                Session::flash('success', 'Investment has been saved successfully');
                $customTitle = 'Investment Successful';
                $customMessage = 'Your Invested in '. $plan->name .' with the amount €' .$request->input('amount');
                $user = auth()->user();
                $user->notify(new EmailAlerts($customMessage, $customTitle));
            } else {
                Session::flash('error', 'An error occurred, Make sure all required fields are selected');
            }
        }
        return redirect()->back();

    }

    public function withdrawal(): View
    {
        $gateways = Gateways::all();
        $plans = Plans::all();
        $wallet = Wallets::where('user_id', Auth::user()->id)->first();

        return view('dashboard.withdrawal', ['gateways' => $gateways, 'plans' => $plans, 'wallet' => $wallet->amount]);
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
        $deposit->hash = strtoupper($randomId);

        if ($deposit->save()) {
            Session::flash('success', 'Withdrawal has been submitted successfully, Pending admin approval');
            $customTitle = 'Withdrawal Request';
            $customMessage = 'Your Withdrawal request has been submitted, Pending admin approval. if you did not initiate this please contact the admin.';
            $user = auth()->user();
            $user->notify(new EmailAlerts($customMessage,$customTitle));
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
                    $fields->gateway()->associate($gateway);
                    $fields->user()->associate($user);
                }

                    $fields->value = $value;

                if ($gateway->code == 'bank') {
                    $fields->bank = $request->input('bank');
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

    public function getPlan(Request $request): JsonResponse
    {
        $plan = Plans::where('name',$request->input('plan'))->first();

        if($plan) {
            $responseData = [
                'status' => 200,
                'min' => $plan->min,
                'max' => $plan->max,
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
                'name' => $gateway->name,
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

        $deposits = Investments::where('user_id', Auth::user()->id)->get();

        foreach ($deposits as $deposit) {
            $wallet = Wallets::where('user_id',$deposit->user->id)->first();

            $today = Carbon::now();
            $currentDate = Carbon::parse($today);

            $created_at = Carbon::parse($deposit->created_at);
            $currentDate->startOfDay();
            $created_at->startOfDay();

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

                        $amount = $daily_profit * floatval($diff_days);

                        for ($day = 1; $day <= $diff_days; $day++) {
                            $transactionDate = $created_at->copy()->addDays($day);

                            $wallet->earnings += $daily_profit;
                            $deposit->profit += $daily_profit;
                            $deposit->profit_updated_at = $transactionDate;
                            $deposit->save();

                            $randomId = bin2hex(random_bytes(5));

                            $trx = new Transaction();
                            $trx->amount = $daily_profit;
                            $trx->hash = strtoupper($randomId);
                            $trx->type = 'interest';
                            $trx->user()->associate(Auth::user());
                            $trx->created_at = $transactionDate;
                            $trx->save();
                        }

                        if ($diff == $deposit->plan->duration) {
                            $wallet->amount += $deposit->profit + $deposit->amount;
                        }
                        $wallet->save();
                    }
                }
            }

        }
    }

}
