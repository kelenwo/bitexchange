@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Rückzug </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rückzug</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form method="POST" action="{{ route('withdrawal') }}">
                        @csrf
                        <div class="card-body">

                            <h6>Wallet-Guthaben: <span class="text-primary">€{{ $wallet }}</span></h6>

                            <br>

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
                                <label for="amount">Geben Sie den abzuhebenden Betrag ein</label>
                                <input type="number" name="amount" id="amount" class="form-control form-control-sm" placeholder="Minimum €500" max="{{ $wallet }}" step="1">
                            </div>
                            <div class="form-group">
                                <label for="gateway">Wählen Sie die Zahlungsmethode</label>
                                <select class="form-control form-control-sm" name="method" id="gateway">
                                    <option value="">Wählen Sie die Zahlungsmethode</option>
                                    @foreach ($gateways as $gateway)
                                        <option value="{{ $gateway->code }}">{{ $gateway->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="wallet">Wallet-Adresse</label>
                                <input type="text" name="wallet" id="wallet" class="form-control form-control-sm" value="" readonly>
                                <p class="my-2 d-none" id="message">
                                    <a href="{{ route('account') }}" >Legen Sie Ihre Wallet-Adresse fest</a>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mr-2" disabled>Zurückziehen</button>
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
                    url: "{{ route('get_wallet') }}?_token={{csrf_token()}}&gateway="+input,
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
                            $('[name="wallet"]').val(response.wallet)
                            $("#message").removeClass("d-none")
                            $("#message").addClass("d-none")

                            if($('[name="amount"]').val() <= {{ $wallet }} && {{ $wallet }} > 0) {
                                $('button[type="submit"]').removeAttr("disabled")
                            }

                        }
                        else{
                            $('[name="wallet"]').attr("placeholder","No Wallet Set")
                            $("#message").removeClass("d-none")
                            $('button[type="submit"]').attr("disabled","disabled")

                        }
                    }
                });
            })
        })
    </script>
@endsection
