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
                        <form method="POST" action="{{ route('investment') }}">
                            @csrf
                            <div class="card-body">
                                <h5 class="">Make an Investment</h5>
                                <p class="card-description small">Make an Investment Today and Start Earning Instantly</p>

                                <h6>Wallet Balance: <span class="text-primary">€{{ $wallet->amount }}</span></h6>

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
                                    <div class="small mb-2">Min: <b>€</b><b id="min">0</b>, Max: <b>€</b><b id="max">0</b> </div>
                                    <input type="number" name="amount" id="amount" class="form-control form-control-sm" value="50.0" placeholder="Deposit Amount" step="1">
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary btn-sm mr-2" disabled>Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Modal -->
            </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function() {
            $('select[name="plan"]').on('change', function () {
                let input = $(this).val()

                $.ajax({
                    url: "{{ route('get_plan') }}?_token={{csrf_token()}}&plan="+input,
                    type: 'POST',
                    dataType: 'json',
                    error: function (xhr, status, error) {
                        console.error(error);
                    },
                    success: function(response) {
                        console.log(response)
                        if(response.status === 200) {
                            $('#min').html(response.min)
                            $('#max').html(response.max)
                            $('#submit').removeAttr('disabled')

                        }
                        else{
                            $('#min').html('0')
                            $('#max').html('0')
                            $('#submit').attr('disabled', 'disabled')

                        }
                    }
                });
            })
        })
    </script>
@endsection
