@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Deposit </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="">Make a deposit</h5>
                        <p class="card-description small">Make a Deposit Today and Start Earning Instantly</p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Select A Plan</label>
                                <select class="form-control form-control-sm">
                                    <option>Select a plan</option>
                                    <option>Plan 1</option>
                                    <option>Plan 2</option>
                                    <option>Plan 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Enter Amount to Deposit</label>
                                <input type="number" class="form-control form-control-sm" value="50.0" placeholder="Username" step="1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Select Payment Method</label>
                                <select class="form-control form-control-sm">
                                    <option>USDT (trc20)</option>
                                    <option>Bitcoin</option>
                                    <option>Ethereum</option>
                                    <option>BNB (Bep20)</option>
                                    <option>TRX</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
