@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')

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

        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form method="POST" action="{{ route('deposit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h5 class="">Ask for withdrawal</h5>

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

                            <div class="form-group mt-3">
                                <label for="exampleInputUsername1">Enter Amount to Withdraw</label>
                                <input type="number" name="amount" class="form-control form-control-sm" value="50.0" placeholder="Withdrawal Amount" step="1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Select Payment Method</label>
                                <select class="form-control form-control-sm" name="method">
                                    <option value="usdt">USDT (trc20)</option>
                                    <option value="btc">Bitcoin</option>
                                    <option value="eth">Ethereum</option>
                                    <option value="bnb">BNB (Bep20)</option>
                                    <option value="trx">TRX</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleInputUsername1">Wallet Address</label>
                                <input type="text" name="wallet" class="form-control form-control-sm" value="No wallet set" readonly>
                                <p class="my-2">
                                    <a href="{{ route('account') }}" >Set your wallet address</a>
                                </p>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#depositModal">Submit</button>
                        </div>

                        <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header card m-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mt-0 card">
                                        <div class="">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p class="card-description mb-2">
                                                            Please pay the equivalent amount in ethereum, provide the transaction ID and receipt screenshot(optional)
                                                        </p>
                                                        <span>Address: </span>
                                                        <h6>0x782405D5F3Dc89993f19fC0cbA0d5e20172cf7eb</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <img src="{{ asset('images/qrcode.jpg') }}" height="150" width="150"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-top pt-4">
                                                        <label for="transaction_id">Transaction ID <span class="text-danger">*</span> </label>
                                                        <input type="text" name="transaction_id" id="transaction_id" class="form-control form-control-sm" placeholder="Transaction ID" step="1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="receipt">Receipt</label>
                                                        <input type="file" accept="image/*" name="receipt" id="receipt" class="form-control ">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-sm mr-2">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal -->
        </div>

    </div>
@endsection
