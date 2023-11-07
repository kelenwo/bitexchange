<?php

namespace App\Http\Controllers;

use App\Models\Referrals;
use App\Models\Users;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'country' => 'required',
            'password' => 'required',
        ]);

        $user = new Users();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->country = $request->input('country');
        $user->mobile = $request->input('mobile');
        $user->password = bcrypt($request->input('password'));
        $user->admin = false;

        if ($user->save()) {
            Auth::login($user);
            $user->sendEmailVerificationNotification();

            if($request->input('referral_id')) {
                $refUser = Users::where('id', $request->input('referral_id'))->first();
                $referral = new Referrals();
                $referral->referral()->associate($refUser);
                $referral->user()->associate($user);
                $referral->amount = 0.0;
                $referral->save();
            }
            Session::flash('success', 'Account Created successfully, A verification email has been sent to your email address.');
            return redirect()->route('dashboard');

        }
        else {
            Session::flash('error', 'An error occurred, Make sure all required fields are selected');
            return redirect()->back();

        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (Auth::check() && Auth::user()->admin) {
                return redirect()->route('admin');
            }
            return redirect('/dashboard');
        }
        else {

            Session::flash('error', "Sorry, we can't find that user. check email and password!");
            return redirect()->back();
        }


    }

}
