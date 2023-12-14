@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Investitionsgeschichte </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transaktionen</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card mx-0 p-4">

                <div class="table-responsive border rounded p-1 px-auto">
                    <table class="table align-items-center justify-content-center datatable">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Transaktions-ID</th>
                            <th class="font-weight-bold">Menge</th>
                            <th class="font-weight-bold">Typ</th>
                            <th class="font-weight-bold">Hergestellt in</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transactions as $trx)
                            <tr>
                                <td>
                                    {{ $trx->hash }}
                                </td>
                                <td>€{{ $trx->amount }}</td>
                                <td> {{$trx->type }}</td>
                                <td>{{ Carbon\Carbon::parse($trx->created_at)->format('jS F, Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
