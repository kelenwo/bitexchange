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
            <form action="" method="post" onsubmit="return checkform()" name="editform">
                <input type="hidden" name="form_id" value="16979592027095">
                <input type="hidden" name="form_token" value="ae45f00d8a6d482f78253ee4c8f9f836">
                <input type="hidden" name="a" value="edit_account">
                <input type="hidden" name="action" value="edit_account">
                <input type="hidden" name="say" value="">

                <div class="form-group">
                    <label for="accountName">Account Name:</label>
                    <p id="accountName">kelenwo</p>
                </div>

                <div class="form-group">
                    <label for="registrationDate">Registration date:</label>
                    <p id="registrationDate">Oct-4-2023 04:18:35 PM</p>
                </div>

                <div class="form-group">
                    <label for="fullName">Your Full Name:</label>
                    <input type="text" name="fullname" id="fullName" value="Kelvin" class="form-control" size="30">
                </div>

                <div class="form-group">
                    <label for="newPassword">New Password:</label>
                    <input type="password" name="password" id="newPassword" value="" class="form-control" size="30">
                </div>

                <div class="form-group">
                    <label for="retypePassword">Retype Password:</label>
                    <input type="password" name="password2" id="retypePassword" value="" class="form-control" size="30">
                </div>

                <div class="form-group">
                    <label for="usdtAccountID">Your Usdt (trc20) Account ID:</label>
                    <input type="text" name="pay_account[1000][Account ID]" id="usdtAccountID" class="form-control" size="30" value="">
                </div>

                <div class="form-group">
                    <label for="bitcoinAccountID">Your Bitcoin Account ID:</label>
                    <input type="text" name="pay_account[1001][Account ID]" id="bitcoinAccountID" class="form-control" size="30" value="">
                </div>

                <div class="form-group">
                    <label for="ethereumAccountID">Your Ethereum Account ID:</label>
                    <input type="text" name="pay_account[1002][Account ID]" id="ethereumAccountID" class="form-control" size="30" value="">
                </div>

                <div class="form-group">
                    <label for="bnbAccountID">Your BNB (bep20) Account ID:</label>
                    <input type="text" name="pay_account[1003][Account ID]" id="bnbAccountID" class="form-control" size="30" value="">
                </div>

                <div class="form-group">
                    <label for="trxAccountID">Your TRX Account ID:</label>
                    <input type="text" name="pay_account[1004][Account ID]" id="trxAccountID" class="form-control" size="30" value="">
                </div>

                <div class="form-group">
                    <label for="emailAddress">Your E-mail address:</label>
                    <input type="text" name="email" id="emailAddress" value="kelenwo68@gmail.com" class="form-control" size="30">
                </div>

                <div class="form-group">
                    <input type="submit" value="Change Account data" class="btn btn-primary form-control sbmt">
                </div>
            </form>
        </div>
    </div>
@endsection
