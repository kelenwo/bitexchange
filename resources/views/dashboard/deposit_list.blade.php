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
        <div class="container-fluid">

            <h6>Your deposits:</h6><br>

            <b>Total: $0.00</b><br><br>

            <div class="table-responsive border rounded p-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="font-weight-bold">Plan</th>
                        <th class="font-weight-bold">Amount</th>
                        <th class="font-weight-bold">Gateway</th>
                        <th class="font-weight-bold">Profit (%)</th>
                        <th class="font-weight-bold">Paid at</th>
                        <th class="font-weight-bold">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($deposits as $deposit)
                        <tr>
                            <td>
                                {{ $deposit->plan }}
                            </td>
                            <td>${{ $deposit->amount }}</td>
                            <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> {{ $deposit->method }}</td>
                            <td>10</td>
                            <td>{{ $deposit->timestamp }}</td>
                            <td>
                                <div class="badge {{ $deposit->status ? "badge-success":"badge-warning" }} p-2">{{ $deposit->status ? "Approved":"Pending" }}</div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>        </div>
    </div>
@endsection
