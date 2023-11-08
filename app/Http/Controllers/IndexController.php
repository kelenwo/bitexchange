<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{

    public function index(): View
    {
        $plans = Plans::all();

        return view('index', ['plans' => $plans]);
    }
    public function invite(Request $request)
    {
        if($request->input('id')) {
            return redirect()->route('register', ['referral_id' => $request->input('id')]);

        }
        return redirect()->route('/');
    }
}
