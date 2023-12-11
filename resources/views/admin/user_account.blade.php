@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit User Account </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User Account</li>
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

            <form action="{{ route('user.account') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <p id="accountName">{{ $user->username }}</p>
                </div>

                <div class="form-group">
                    <label for="registrationDate">Registration date:</label>
                    <p id="registrationDate">{{ Carbon\Carbon::parse($user->created_at)->format('jS F, Y') }}</p>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Your E-mail address:</label>
                    <input type="text" name="email" id="emailAddress" value="{{ $user->email }}" class="form-control bg-white" readonly>
                </div>

                <div class="form-group">
                    <label for="fullName">Your Full Name:</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fullName">Country</label>
                    <select name="country" class="form-control form-control-sm">
                        <option value="">Country</option>
                        <option {{ $user->country == "United States of America" ? "selected":null }} value="United States of America">United States of America</option>
                        <option {{ $user->country == "United Kingdom" ? "selected":null }} value="United Kingdom">United Kingdom</option>
                        <option {{ $user->country == "India" ? "selected":null }} value="India">India</option>
                        <option {{ $user->country == "Germany" ? "selected":null }} value="Germany">Germany</option>
                        <option {{ $user->country == "Argentina" ? "selected":null }} value="Argentina">Argentina</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fullName">Role</label>
                    <select name="role" class="form-control form-control-sm">
                        <option {{ ! $user->admin ? "selected":null }} value="{{ false }}">User</option>
                        <option {{ $user->admin ? "selected":null }} value="{{ true }}">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fullName">Total Wallet Balance:</label>
                    <input type="number" name="wallet" id="deposit_balance" value="{{ $wallet }}" class="form-control bg-white">
                </div>

                <div class="form-group">
                    <label for="fullName">Total Deposit Balance:</label>
                    <input type="number" name="deposit" id="deposit_balance" value="{{ $deposit }}" class="form-control bg-white">
                </div>

                <div class="form-group">
                    <label for="fullName">Total Investment Balance:</label>
                    <input type="number" name="investments" id="deposit_balance" value="{{ $totalInvestments }}" class="form-control bg-white">
                </div>

                <div class="form-group">
                    <label for="fullName">Total Interest Balance:</label>
                    <input type="number" name="earnings" id="earning_balance" value="{{ $totalEarnings }}" class="form-control bg-white">
                </div>

                <div class="form-group">
                    <label for="fullName">Total Withdrawal Balance:</label>
                    <input type="number" name="withdrawals" id="withdrawals_balance" value="{{ $totalWithdrawals }}" class="form-control bg-white">
                </div>

                <div class="form-group">
                    <label for="fullName">Total Referral Earning:</label>
                    <input type="number" name="referrals" id="referrals_balance" value="{{ $totalReferrals }}" class="form-control bg-white">
                </div>


                <div class="form-group">
                    <input type="submit" value="Change Account data" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
