@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Transactions </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Withdrawal History</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card mx-0 p-4">
                <h6>Your Withdrawals:</h6><br>

                <b>Total: <span class="text-primary">€{{ $total }}</span></b>
                <br><br>

                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Amount</th>
                            <th class="font-weight-bold">Gateway</th>
                            <th class="font-weight-bold">Paid at</th>
                            <th class="font-weight-bold">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($withdrawals as $withdrawal)
                            <tr>
                                <td>€{{ $withdrawal->amount }}</td>
                                <td> {{ $withdrawal->gateway->name }}</td>
                                <td>{{ Carbon\Carbon::parse($withdrawal->created_at)->format('jS F, Y') }}</td>
                                <td>
                                    <div class="badge {{ $withdrawal->status ? "badge-success":"badge-warning" }} p-2">{{ $withdrawal->status ? "Approved":"Pending" }}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
