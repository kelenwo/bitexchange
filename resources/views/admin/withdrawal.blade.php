@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <style>
        img {
            border: 1px #dddddd solid !important;
            border-radius: 0 !important;
            height: 16px !important;
            width: 38px !important;
        }
    </style>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Withdrawal </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Withdrawal</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <h6>Ask for withdrawal:</h6>
            <br>
            <form method="post">
                <input type="hidden" name="form_id" value="16979583406945"><input type="hidden" name="form_token" value="8ea231c8b719854e28b5fda9aef8941b">
                <input type="hidden" name="a" value="withdraw">
                <input type="hidden" name="action" value="preview">
                <input type="hidden" name="say" value="">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-centered m-0">
                        <tbody>
                        <tr>
                            <td>Account Balance:</td>
                            <td>$<b>0.00</b></td>
                        </tr>
                        <tr>
                            <td>Pending Withdrawals: </td>
                            <td>$<b></b></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-centered m-0">
                        <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>Processing</th>
                            <th>Available</th>
                            <th>Pending</th>
                            <th>Account</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td><img src="{{asset('images/dashboard/1000.gif')}}" width="44" height="17" align="absmiddle"> Usdt (trc20)</td>
                            <td><b style="color:green">$0.00</b></td>
                            <td><b style="color:red">$0.00</b></td>
                            <td><span class="badge bg-soft-primary text-danger"><a href="?a=edit_account"><i>not set</i></a></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="{{asset('images/dashboard/1001.gif')}}" width="44" height="17" align="absmiddle"> Bitcoin</td>
                            <td><b style="color:green">$0.00</b></td>
                            <td><b style="color:red">$0.00</b></td>
                            <td><span class="badge bg-soft-primary text-danger"><a href="?a=edit_account"><i>not set</i></a></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="{{asset('images/dashboard/1002.gif')}}" width="44" height="17" align="absmiddle"> Ethereum</td>
                            <td><b style="color:green">$0.00</b></td>
                            <td><b style="color:red">$0.00</b></td>
                            <td><span class="badge bg-soft-primary text-danger"><a href="?a=edit_account"><i>not set</i></a></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="{{asset('images/dashboard/1003.gif')}}" width="44" height="17" align="absmiddle"> BNB (bep20)</td>
                            <td><b style="color:green">$0.00</b></td>
                            <td><b style="color:red">$0.00</b></td>
                            <td><span class="badge bg-soft-primary text-danger"><a href="?a=edit_account"><i>not set</i></a></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img src="{{asset('images/dashboard/1004.gif')}}" width="44" height="17" align="absmiddle"> TRX</td>
                            <td><b style="color:green">$0.00</b></td>
                            <td><b style="color:red">$0.00</b></td>
                            <td><span class="badge bg-soft-primary text-danger"><a href="?a=edit_account"><i>not set</i></a></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <div class="alert alert-danger" role="alert">You have no funds to withdraw.</div>
            </form>
        </div>
    </div>
@endsection
