<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Fields;
use App\Models\Gateways;
use App\Models\Plans;
use App\Models\Users;
use App\Models\Wallets;
use App\Models\Withdrawals;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
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
    public function withdrawals(): View
    {
        $data = Withdrawals::all();

        return view('admin.withdrawals', ['withdrawals' => $data]);
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
        ]);

        $plan = Plans::where('name', $request->input('name'))->first();

        if (!$plan) {
            $plan = new Plans();
            $plan->name = $request->input('name');
            $plan->roi = $request->input('roi');
            $plan->duration = $request->input('duration');


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
                    $wallet->amount += $record->amount;
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
                    $wallet->amount = $record->amount;
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
        }
        else {
            Session::flash('error', 'An error occurred. Make sure all required fields are selected.');
        }

        return redirect()->back();
    }

}
