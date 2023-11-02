@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Manage Gateways </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gateway</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <form method="POST" action="{{ route('deposit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h5 class="">Gateways</h5>

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

                            <div class="table-responsive table-hover rounded p-1">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="font-weight-bold">Name</th>
                                        <th class="font-weight-bold">Code</th>
                                        <th class="font-weight-bold">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Bitcoin
                                        </td>
                                        <td>btc</td>
                                        <td>
                                            <span class="badge badge-danger p-2" type="button">Delete</span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </form>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <form method="POST" action="{{ route('deposit') }}">
                        @csrf
                        <div class="card-body">
                            <h5 class="">Add Gateway</h5>

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

                            <div class="form-group mt-3">
                                <label for="exampleInputUsername1">Gateway Name</label>
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="E.g: Bitcoin, Ethereum, USDT">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleInputUsername1">Gateway code</label>
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="E.g: btc, eth, usdt">
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#depositModal">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- Modal -->
        </div>

    </div>
@endsection
