<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function invite(Request $request)
    {
        if($request->input('id')) {
            return redirect()->route('register', ['referral_id' => $request->input('id')]);

        }
        return redirect()->route('/');
    }
}
