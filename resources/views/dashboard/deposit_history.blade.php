@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Einzahlungsverlauf </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Investition</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card mx-0 p-4">
                <h6>Ihre Einzahlungen:</h6><br>

{{--                <b>Gesamt: <span class="text-primary">€{{ $total }}</span></b>--}}
{{--                <br><br>--}}

                <div class="table-responsive border rounded p-1">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Tor</th>
                            <th class="font-weight-bold">Menge</th>
                            <th class="font-weight-bold">Bezahlt bei</th>
                            <th class="font-weight-bold">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($deposits as $deposit)
                            <tr>
                                <td> {{ $deposit->gateway->name }}</td>
                                <td>€{{ $deposit->amount }}</td>
                                <td>{{ Carbon\Carbon::parse($deposit->created_at)->format('jS F, Y') }}</td>
                                <td>
                                    <div class="badge {{ $deposit->status ? "badge-success":"badge-warning" }} p-2">{{ $deposit->status ? "Approved":"Pending" }}</div>
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
