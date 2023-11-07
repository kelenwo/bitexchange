@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Referral</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Referrals</li>
                </ol>
            </nav>
        </div>

        <div class="row mb-4 g-4">

            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <form class="referral-form" onsubmit="return false">
                            <div class="mb-4 mt-5">
                                <h5>Share the referral link</h5>
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3 align-items-end">
                                    <div class="w-100 mt-2">
                                        <label class="form-label mb-0" for="referralLink">Copy and share referral link</label>
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
                                <h5>Invite your friends</h5>
                                <div class="d-flex flex-wrap flex-lg-nowrap gap-3 align-items-end">
                                    <div class="w-100">
                                        <label class="form-label mb-0" for="referralEmail">Enter friend’s email address and invite them</label>
                                        <div class="input-group col-xs-12">
                                            <input type="text" name="referralEmail" class="form-control" placeholder="Email address">
                                            <span class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button">Invite</button>
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
                        <h5 class="mb-1">How to use</h5>
                        <p class="mb-4">Integrate your referral code in 3 easy steps.</p>
                        <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-3">

                            <div class="d-flex flex-column align-items-center">
                                <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-rocket fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">Create &amp; validate your referral link and get</p>
                            </div>

                            <div class="d-flex flex-column align-items-center">
                                <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-user-check fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">For every new signup, when user invests you get</p>
                                <h5 class="text-primary mb-0">10% commission</h5>
                            </div>

                            <div class="d-flex flex-column align-items-center">
                               <span class="text-primary p-3 border border-primary rounded-circle border-dashed mb-0">
                                   <i class="fas fa-paper-plane fa-lg"></i>
                                </span>
                                <p class="mt-3 mb-2 w-75">Get other friends to generate link</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <div class="card mx-0 p-4">
                <h6>Your Referrals:</h6><br>

                <b>Total Earned: <span class="text-success">${{ $total }}</span></b>
                <br><br>

                <div class="table-responsive border rounded p-1">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">User</th>
                            <th class="font-weight-bold">Earning</th>
                            <th class="font-weight-bold">Date</th>
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
                                    <span class="text-success">${{ $referral->amount }}</span></td>
                                <td>{{ Carbon\Carbon::parse($referral->created_at)->format('jS F, Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </div>
@endsection
