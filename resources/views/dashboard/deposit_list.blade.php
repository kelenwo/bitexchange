@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Deposits </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="card mx-0 p-4">

                <b>Total: <span class="text-primary">${{ $total }}</span></b>
                <br><br>

                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Plan</th>
                            <th class="font-weight-bold">Amount</th>
                            <th class="font-weight-bold">Profit (%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($deposits as $deposit)
                            <tr>
                                <td>
                                    <b>{{ $deposit->plan->name }}</b>
                                    (%{{ $deposit->plan->roi }} after  {{ $deposit->plan->duration }})
                                </td>
                                <td>${{ $deposit->amount }}</td>
                                <td> $0</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
