<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('dashboard.login');
    }

    public function register(): View
    {
        return view('dashboard.register');
    }

    public function saveRegister(Request $request)
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
        $user->password = bcrypt($request->input('password')); // Make sure to hash the password
        $user->usdt = $request->input('usdt');
        $user->eth = $request->input('eth');
        $user->btc = $request->input('btc');
        $user->bnb = $request->input('bnb');
        $user->trx = $request->input('trx');
        $user->admin = false;

        if ($user->save()) {
            Session::flash('success', 'Account Created successfully, login to continue');
            return redirect()->route('login');

        }
        else {
            Session::flash('error', 'An error occurred, Make sure all required fields are selected');
            return redirect()->back();

        }
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/dashboard');
        }
        else {

            Session::flash('error', "Sorry, we can't find that user. Check email and password!");
            return redirect()->back();
        }


    }

    public function logout(): RedirectResponse
    {
        Auth::logout(); // Log the user out
        return redirect()->route('/'); // Redirect to the login page
    }
}
