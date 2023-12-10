@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Investments </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Investments</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="card mx-0 p-4">

{{--                <b>Total: <span class="text-primary">€{{ $total }}</span></b>--}}
{{--                <br><br>--}}

                <div class="table-responsive border rounded p-1">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Plan</th>
                            <th class="font-weight-bold">Amount</th>
                            <th class="font-weight-bold">Profit (%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($investments as $investment)
                            <tr>
                                <td>
                                    <b>{{ $investment->plan->name }}</b>
                                    (%{{ $investment->plan->roi }} {{ $investment->plan->frequency }})
                                </td>
                                <td>€{{ $investment->amount }}</td>
                                <td> €{{ number_format(($investment->amount * $investment->plan->roi / 100) * ($investment->plan->duration) + ($investment->amount), 2) }} after {{ $investment->plan->duration }} days</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
