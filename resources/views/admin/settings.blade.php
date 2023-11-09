@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Site Settings </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Site Settings</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
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
                    <form method="POST" action="{{ route('admin_settings') }}">
                        @csrf
                        <div class="card-body">
                            @foreach ($gateways as $gateway)
                                @php
                                    $field = \App\Models\Fields::where('settings', true)->where('gateway_id',$gateway->id)->first()
                                @endphp
                                <div class="form-group">
                                    <label for="{{ $gateway->code }}">{{ $gateway->name }}</label>
                                    <input type="text" name="gateway[{{ $gateway->code }}]" id="{{ $gateway->code }}" class="form-control" placeholder="{{ $gateway->name }}" value="{{ $field?->value }}">
                                </div>
                            @endforeach

                                <button type="submit" class="btn btn-primary btn-sm mr-2">Submit</button>

                        </div>

                    </form>
                </div>
            </div>
            <!-- Modal -->
        </div>

    </div>
@endsection
