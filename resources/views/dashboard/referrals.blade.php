@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Verweisung</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Empfehlungen</li>
                </ol>
            </nav>
        </div>

        <div class="row mb-4 g-4">

            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <form class="referral-form" onsubmit="return false">
                            <div class="mb-4 mt-5">
                                <h5>Teilen Sie den Empfehlungslink</h5>
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3 align-items-end">
                                    <div class="w-100 mt-2">
                                        <label class="form-label mb-0" for="referralLink">Empfehlungslink kopieren und teilen</label>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control" name="referral-link" value="{{ route('invite', ['id' => Auth::user()->id]) }}" placeholder="Referral link">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button" data-toggle="tooltip" title="Click to copy"><i class="fa fa-copy"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none">
                                <h5>Lade deine Freunde ein</h5>
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3 align-items-end">
                                    <div class="w-100">
                                        <label class="form-label mb-0" for="referralEmail">Geben Sie die E-Mail-Adresse eines Freundes ein und laden Sie ihn ein</label>
                                        <div class="input-group col-xs-12">
                                            <input type="text" name="referralEmail" class="form-control" placeholder="Email address">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button">Einladen</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="mb-1">Wie benutzt man</h5>
                        <p class="mb-4">Integrieren Sie Ihren Empfehlungscode in 3 einfachen Schritten.</p>
                        <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-3">

                            <div class="d-flex flex-column align-items-center">
                                <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-rocket fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">Erstellen &amp; Bestätigen Sie Ihren Empfehlungslink und erhalten Sie ihn</p>
                            </div>

                            <div class="d-flex flex-column align-items-center">
                                <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-user-check fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">Für jede neue Anmeldung erhalten Sie, wenn der Benutzer investiert</p>
                                <h5 class="text-primary mb-0">10 % Provision</h5>
                            </div>

                            <div class="d-flex flex-column align-items-center">
                               <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-paper-plane fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">Bringen Sie andere Freunde dazu, einen Link zu generieren</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <div class="card mx-0 p-4">
                <h6>Ihre Empfehlungen:</h6><br>

                <b>Insgesamt verdient: <span class="text-success">€{{ $total }}</span></b>
                <br><br>

                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">Benutzer</th>
                            <th class="font-weight-bold">Verdienen</th>
                            <th class="font-weight-bold">Datum</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($referrals as $referral)
                            <tr>
                                <td>
                                    {{ $referral->user->name }}
                                    <div class="mt-1 text-primary">
                                        <small>{{ $referral->user->email }}</small>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-success">€{{ $referral->amount }}</span></td>
                                <td>{{ Carbon\Carbon::parse($referral->created_at)->format('jS F, Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </div>
@endsection
