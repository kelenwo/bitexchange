@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Pending Deposits </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Deposits</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Deposits</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="font-weight-bold">User</th>
                                <th class="font-weight-bold">Plan</th>
                                <th class="font-weight-bold">Amount</th>
                                <th class="font-weight-bold">Gateway</th>
                                <th class="font-weight-bold">Deposit ID</th>
                                <th class="font-weight-bold">Status</th>
                                <th class="font-weight-bold">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit->user->email }}</td>
                                    <td>{{ $deposit->plan->name }}</td>
                                    <td>${{ $deposit->amount }}</td>
                                    <td>{{ $deposit->gateway->name }}</td>
                                    <td>{{ strtoupper($deposit->hash) }}</td>
                                    <td>
                                        <div class="badge {{ $deposit->status ? "badge-success":"badge-warning" }} p-2">{{ $deposit->status ? "Approved":"Pending" }}</div>
                                    </td>
                                    <td>
                                        <span class="badge badge-info p-2" type="button" data-toggle="modal" data-target="#depositModal-{{ $deposit->id }}"><i class="fa fa-search"></i> View</span>

                                        <div class="modal fade" id="depositModal-{{ $deposit->id }}" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header card m-0">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fa fa-times"></i> </span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mt-0 pt-0 bg-white">
                                                        <div class="col-md-12">
                                                            <div class="card m-0 p-0">
                                                                <div class="card-body m-0 p-0">
                                                                    <table class="table table-striped">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Deposit ID:</td>
                                                                            <td>{{ $deposit->id }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Deposit Hash:</td>
                                                                            <td>{{ strtoupper($deposit->hash) }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>User:</td>
                                                                            <td><a href="#">{{ $deposit->user->email }}</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Amount:</td>
                                                                            <td>{{ $deposit->amount }} USD</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Gateway:</td>
                                                                            <td>{{ $deposit->gateway->name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Reference Number:</td>
                                                                            <td>{{ $deposit->transaction_id }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Date:</td>
                                                                            <td>{{ Carbon\Carbon::parse($deposit->created_at)->format('jS F, Y') }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Processed on:</td>
                                                                            <td>{{ Carbon\Carbon::parse($deposit->updated_at)->format('jS F, Y') }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Status:</td>
                                                                            <td>
                                                                                <span class="badge {{ $deposit->status ? "badge-success":"badge-warning" }} p-2">
                                                                                    {{ $deposit->status ? "Approved":"Pending" }}
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <div class="my-2">
                                                                        <form action="{{ route('process_item', ['id' => $deposit->id, 'type' => 'Deposits']) }}" method="POST">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-success btn-sm" name="action" value="accept">Accept Deposit</button>
                                                                            <button type="submit" class="btn btn-danger btn-sm" name="action" value="cancel">Cancel Deposit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
