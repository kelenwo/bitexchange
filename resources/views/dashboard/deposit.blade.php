@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Invest </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invest</li>
                </ol>
            </nav>
        </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <form method="POST" action="{{ route('deposit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h5 class="">Make an Investment</h5>
                                <p class="card-description small">Make an Investment Today and Start Earning Instantly</p>

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

                                <div class="form-group">
                                    <label for="plan">Select A Plan</label>
                                    <select class="form-control form-control-sm" name="plan" id="plan">
                                        <option>Select a plan</option>
                                        @foreach ($plans as $plan)
                                            <option value="{{ $plan->name }}">{{ $plan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount">Enter Amount</label>
                                    <input type="number" name="amount" id="amount" class="form-control form-control-sm" value="50.0" placeholder="Deposit Amount" step="1">
                                </div>
                                <div class="form-group">
                                    <label for="gateway">Select Payment Method</label>
                                    <select class="form-control form-control-sm" name="method" id="gateway">
                                        <option>Select Payment Method</option>
                                        @foreach ($gateways as $gateway)
                                            <option value="{{ $gateway->code }}">{{ $gateway->name }}</option>
                                        @endforeach
                                    </select>
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
                                                            <h6 id="payment-address"></h6>
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
    <script type="application/javascript">
        $(document).ready(function() {
            $('select[name="method"]').on('change', function () {
                let input = $(this).val()

                $.ajax({
                    url: "{{ route('deposit.get_wallet') }}?_token={{csrf_token()}}&gateway="+input,
                    type: 'POST',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    error: function (xhr, status, error) {
                        console.error(error);
                    },
                    success: function(response) {
                        console.log(response)
                        if(response.status === 200) {
                            $('#payment-address').text(response.wallet)

                        }
                        else{
                            $('#payment-address').html('<small class="text-danger">No payment address set, contact admin for wallet address!</small>')
                        }
                    }
                });
            })
        })
    </script>
@endsection
