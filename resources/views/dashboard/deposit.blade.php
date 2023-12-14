@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Kaution </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kaution</li>
                </ol>
            </nav>
        </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <form method="POST" action="{{ route('deposit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h5 class="">Auf Wallet einzahlen</h5>

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
                                    <label for="amount">Menge eingeben</label>
                                    <input type="number" name="amount" id="amount" class="form-control form-control-sm" value="50.0" placeholder="Deposit Amount" step="1">
                                </div>
                                <div class="form-group">
                                    <label for="gateway">Wählen Sie die Zahlungsmethode</label>
                                    <select class="form-control form-control-sm" name="method" id="gateway">
                                        <option>Wählen Sie die Zahlungsmethode</option>
                                        @foreach ($gateways as $gateway)
                                            <option value="{{ $gateway->code }}">{{ $gateway->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#depositModal">Kaution</button>
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
                                                                Bitte zahlen Sie den entsprechenden Betrag ein<span id="wallet-name"></span> Geben Sie die Transaktions-ID und den Beleg-Screenshot an (optional)
                                                            </p>
                                                            <span>Adresse: </span>
                                                            <h6 id="payment-address"></h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div id="qrcode" ></div>
                                                            </div>
                                                        </div>
{{--                                                        <div class="form-group border-top pt-4">--}}
{{--                                                            <label for="transaction_id">Transaction ID <span class="text-danger">*</span> </label>--}}
{{--                                                            <input type="text" name="transaction_id" id="transaction_id" class="form-control form-control-sm" placeholder="Transaction ID" step="1">--}}
{{--                                                        </div>--}}
                                                        <div class="form-group">
                                                            <label for="receipt">Quittung</label>
                                                            <input type="file" accept="image/*" name="receipt" id="receipt" class="form-control ">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary btn-sm mr-2">Kaution</button>
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
                    error: function (xhr, status, error) {
                        console.error(error);
                    },
                    success: function(response) {
                        console.log(response)
                        if(response.status === 200) {
                            $('#payment-address').text(response.wallet)
                            $('#qrcode').html(response.qrcode)
                            $('#wallet-name').html(response.name)

                        }
                        else{
                            $('#payment-address').html('<small class="text-danger">No payment address set, contact admin for wallet address!</small>')
                            $('#qrcode').html('')
                            $('#wallet-name').html('')

                        }
                    }
                });
            })
        })
    </script>
@endsection
