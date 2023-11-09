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
                    <p id="registrationDate">{{ Carbon\Carbon::parse(Auth::user()->created_at)->format('jS F, Y') }}</p>
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
                        <option value="">Country</option>
                        <option {{ Auth::user()->country == "United States of America" ? "selected":null }} value="United States of America">United States of America</option>
                        <option {{ Auth::user()->country == "United Kingdom" ? "selected":null }} value="United Kingdom">United Kingdom</option>
                        <option {{ Auth::user()->country == "India" ? "selected":null }} value="India">India</option>
                        <option {{ Auth::user()->country == "Germany" ? "selected":null }} value="Germany">Germany</option>
                        <option {{ Auth::user()->country == "Argentina" ? "selected":null }} value="Argentina">Argentina</option>
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

                @foreach ($gateways as $gateway)
                    @php
                        $field = \App\Models\Fields::where('user_id', Auth::user()->id)->where('gateway_id',$gateway->id)->first()
                    @endphp
                    <div class="form-group">
                        <label for="{{ $gateway->code }}">{{ $gateway->name }}</label>
                        <input type="text" name="gateway[{{ $gateway->code }}]" id="{{ $gateway->code }}" class="form-control" placeholder="{{ $gateway->name }}" value="{{ $field?->value }}">
                    </div>
                @endforeach

                <div class="form-group">
                    <input type="submit" value="Change Account data" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
