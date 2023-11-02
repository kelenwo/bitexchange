@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Account </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid mt-4">

            @if(Session::has('success'))
                <div class="py-2 alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="py-2 alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <form action="{{ route('account') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <p id="accountName">{{ Auth::user()->username }}</p>
                </div>

                <div class="form-group">
                    <label for="registrationDate">Registration date:</label>
                    <p id="registrationDate">{{ Auth::user()->timestamp }}</p>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Your E-mail address:</label>
                    <input type="text" name="email" id="emailAddress" value="{{ Auth::user()->email }}" class="form-control bg-white" readonly>
                </div>

                <div class="form-group">
                    <label for="fullName">Your Full Name:</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fullName">Country</label>
                    <select name="country" class="form-control form-control-sm">
                        <option>Country</option>
                        <option value="United States of America">United States of America</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="India">India</option>
                        <option value="Germany">Germany</option>
                        <option value="Argentina">Argentina</option>
                    </select>

                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="newPassword">New Password:</label>--}}
{{--                    <input type="password" name="password" id="newPassword" value="" class="form-control">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="retypePassword">Retype Password:</label>--}}
{{--                    <input type="password" name="password2" id="retypePassword" value="" class="form-control">--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="usdtAccountID">Your Usdt (trc20) Account ID:</label>
                    <input type="text" name="usdt" id="usdtAccountID" class="form-control" value="{{ Auth::user()->usdt }}">
                </div>

                <div class="form-group">
                    <label for="bitcoinAccountID">Your Bitcoin Account ID:</label>
                    <input type="text" name="btc" id="bitcoinAccountID" class="form-control" value="{{ Auth::user()->btc }}">
                </div>

                <div class="form-group">
                    <label for="ethereumAccountID">Your Ethereum Account ID:</label>
                    <input type="text" name="eth" id="ethereumAccountID" class="form-control" value="{{ Auth::user()->eth }}">
                </div>

                <div class="form-group">
                    <label for="bnbAccountID">Your BNB (bep20) Account ID:</label>
                    <input type="text" name="bnb" id="bnbAccountID" class="form-control" value="{{ Auth::user()->bnb }}">
                </div>

                <div class="form-group">
                    <label for="trxAccountID">Your TRX Account ID:</label>
                    <input type="text" name="trx" id="trxAccountID" class="form-control" value="{{ Auth::user()->trx }}">
                </div>

                <div class="form-group">
                    <input type="submit" value="Change Account data" class="btn btn-primary form-control sbmt">
                </div>
            </form>
        </div>
    </div>
@endsection
