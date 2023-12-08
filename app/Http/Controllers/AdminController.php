<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Fields;
use App\Models\Gateways;
use App\Models\Plans;
use App\Models\Referrals;

use App\Models\Transaction;
use App\Models\Users;
use App\Models\Wallets;
use App\Models\Withdrawals;
use App\Notifications\EmailAlerts;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use App\Models\Deposit;

class AdminController extends Controller
{



    public function __construct() {
        $this->updateWallet();
    }
    public function index(): View
    {
        $users = Users::count();
        $deposits = Deposits::where('status', true)->get();
        $pending_deposits = Deposits::where('status', false)->get();
        $withdrawals = Withdrawals::where('status', true)->get();
        $pending_withdrawals = Withdrawals::where('status', false)->get();

        return view('admin.index', ['users' => $users, 'deposits' => $deposits, 'pending_deposits' => $pending_deposits, 'withdrawals' => $withdrawals, 'pending_withdrawals' => $pending_withdrawals]);
    }

    public function gateway(): View
    {
        $data = Gateways::all();

        return view('admin.gateway', ['gateways' => $data]);
    }
    public function plan(): View
    {
        $data = Plans::all();

        return view('admin.plans', ['plans' => $data]);
    }
    public function deposits(): View
    {
        $data = Deposits::all();

        return view('admin.deposits', ['deposits' => $data]);
    }
    public function pending_deposits(): View
    {
        $data = Deposits::where('status', false)->get();

        return view('admin.pending_deposits', ['deposits' => $data]);
    }
    public function withdrawals(): View
    {
        $data = Withdrawals::all();

        return view('admin.withdrawals', ['withdrawals' => $data]);
    }
    public function pending_withdrawals(): View
    {
        $data = Withdrawals::where('status', false)->get();

        return view('admin.pending_withdrawals', ['withdrawals' => $data]);
    }
    public function users(): View
    {
        $data = Users::all();

        return view('admin.users', ['users' => $data]);
    }
    public function settings(): View
    {
        $gateways = Gateways::all();

        return view('admin.settings', ['gateways' => $gateways]);
    }

    public function account(Request $request): View
    {
        $userId = $request->id;
        $user = Users::where('id', $userId)->first();

        $totalProfits = Referrals::where('user_id', $user->id)->get()->sum('profit');
        $totalDeposits = Deposits::where('user_id', $user->id)->get()->sum('amount');
        $gateways = Gateways::all();

        return view('admin.user_account', ['user' => $user, 'gateways' => $gateways ,  'totalProfits' => $totalProfits ,  'totalDeposits' => $totalDeposits]);
    }


    public function updateAccount(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
        ]);

        $user = Users::where('email', $request->input('email'))->first();

        if (!$user) {
            Session::flash('error', 'User not found');
            return redirect()->back();
        }

        $user->name = $request->input('name');
        $user->country = $request->input('country');
        $user->admin = (bool)$request->input('role');

        foreach ($request->input('wallet') as $key => $value) {

            $gateway = Gateways::where('code',$key)->first();

            if($gateway) {
                $wallet = Wallets::where('user_id', $user->id)->where('gateway_id',$gateway->id)->first();

                if(!$wallet) {

                    $wallet = new Wallets();
                    $wallet->gateway()->associate($gateway);
                    $wallet->user()->associate($user);

                }
                $wallet->amount = floatval($value);
                $wallet->save();
            }

        }

        if ($user->save()) {
            Session::flash('success', 'Account updated successfully.');
        }
        else {
            Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
        }
        return redirect()->route('admin_users');

    }


    public function saveGateway(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);

        $gateway = Gateways::where('code', $request->input('code'))->first();

        if (!$gateway) {
            $gateway = new Gateways();
            $gateway->name = $request->input('name');
            $gateway->code = $request->input('code');

            if ($gateway->save()) {

                Session::flash('success', 'Gateway added successfully.');
                return redirect()->back();
            }
            else {
                Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
                return redirect()->back();
            }
        }
        else {
            Session::flash('error', 'Gateway already exists!!');
            return redirect()->back();
        }
    }

    public function savePlan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roi' => 'required',
            'duration' => 'required',
            'frequency' => 'required',
            'min' => 'required',
            'max' => 'required',
        ]);

        $plan = Plans::where('name', $request->input('name'))->first();

        if (!$plan) {
            $plan = new Plans();
            $plan->name = $request->input('name');
            $plan->roi = $request->input('roi');
            $plan->min = $request->input('min');
            $plan->max = $request->input('max');
            $plan->duration = $request->input('duration');
            $plan->frequency = $request->input('frequency');


            if ($plan->save()) {
                Session::flash('success', 'Plan added successfully.');
                return redirect()->back();
            }
            else {
                Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
                return redirect()->back();
            }
        }
        else {
            Session::flash('error', 'Plan already exists!!');
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $type = $request->input('type');
        $record = null;
        switch ($type) {
            case "Gateways":
                $record = Gateways::find($id);
                break;
            case "Deposits":
                $record = Deposits::find($id);
                break;
            case "Plans":
                $record = Plans::find($id);
                break;
            case "Users":
                $record = Users::find($id);
                break;
        }

        if (!$record) {
            Session::flash('error', 'Record does not exist.');
            return redirect()->back();
        }

        $record->delete();
        Session::flash('success', 'Record deleted successfully.');
        return redirect()->back();
    }

    public function process(Request $request): RedirectResponse
    {
        $id = $request->input('id');
        $type = $request->input('type');
        $action = $request->input('action');
        $status = null;
        $record = null;

        switch ($type) {
            case "Deposits":
                $record = Deposits::find($id);
                break;
            case "Withdrawals":
                $record = Withdrawals::find($id);
                break;
        }

        switch ($action) {
            case "accept":
                $status = true;
                break;
            case "cancel":
                $status = 2;
                break;
        }

        if (!$record) {
            Session::flash('error', 'Record does not exist.');
            return redirect()->back();
        }

        if($status === true) {
            $wallet = Wallets::where('user_id',$record->user->id)->where('gateway_id',$record->gateway->id)->first();
            $user = Users::where('email', $record->user->email)->first();
            $gateway = Gateways::where('code', $record->gateway->code)->first();

            if($wallet) {
                if($type == 'Deposits') {
                    $record->profit = 0.00;
                    $record->profit_updated_at = Carbon::now();
                    $record->save();
//                    $wallet->amount += $record->amount;
                    $referral = Referrals::where('user_id', $record->user->id)->first();

                    if($referral) {
                        $referral->amount += 5.00;
                        $referral->save();
                    }
                }

                if($type == 'Withdrawals') {
                    $wallet->amount -=  $record->amount;
                }

            }
            else {
                $wallet = new Wallets();
                $wallet->gateway()->associate($gateway);
                $wallet->user()->associate($user);
                if($type == 'Deposits') {
                    $wallet->amount = 0.00;
                    $record->profit = 0.00;
                    $record->profit_updated_at = Carbon::now();
                    $record->save();
                }

                if($type == 'Withdrawals') {
                    $wallet->amount =  $record->amount;
                }


            }
            $wallet->save();
        }

        $record->status = $status;

        if ($record->save()) {
            Session::flash('success', 'Approved successfully.');

            if($type == 'Deposits') {
                $customTitle = 'Investment Approved';
                $customMessage = 'Your Investment has been Approved, Continue to your dashboard to confirm.';

            }
            if($type == 'Withdrawals') {
                $customTitle = 'Withdrawal Request Processed';
                $customMessage = 'Your withdrawal request has been processed';

            }

            $user->notify(new EmailAlerts($customMessage,$customTitle));
        }
        else {
            Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
        }

        return redirect()->back();
    }

    public function updateSettings(Request $request): RedirectResponse
    {


        foreach ($request->input('gateway') as $key => $value) {

            $gateway = Gateways::where('code',$key)->first();

            if($gateway) {

                $fields = Fields::where('settings', true)->where('gateway_id',$gateway->id)->first();
                if (!$fields) {
                    $fields = new Fields();
                    $fields->value = $value;
                    $fields->settings = true;
                    $fields->gateway()->associate($gateway);
                }
                else {
                    $fields->value = $value;
                }

                if ($fields->save()) {
                    Session::flash('success', 'Settings updated successfully.');
                }
                else {
                    Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
                }
            }

        }

        return redirect()->back();

    }

    public function updateWallet(): void
    {
        $users = Users::all();

        foreach ($users as $user) {
            $deposits = Deposits::where('user_id', $user->id)->get();

            foreach ($deposits as $deposit) {

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

                                $deposit->profit += $daily_profit;
                                $deposit->profit_updated_at = $transactionDate;
                                $deposit->save();

                                $randomId = bin2hex(random_bytes(5));

                                $trx = new Transaction();
                                $trx->amount = $daily_profit;
                                $trx->hash = $randomId;
                                $trx->type = 'interest';
                                $trx->user()->associate($user);
                                $trx->created_at = $transactionDate;
                                $trx->save();
                            }

                            if ($diff == $deposit->plan->duration) {

                                $user = $deposit->user;
                                $user->wallet->amount += $deposit->profit + $deposit->amount;
                                $user->wallet->save();

                            }

                        }
                    }
                }

            }
        }
    }

}
