<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/admin');
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
