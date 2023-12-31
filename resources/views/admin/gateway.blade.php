@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Manage Gateways </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gateway</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
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
                                    @foreach ($gateways as $gateway)
                                        <tr>
                                            <td>{{ $gateway->name }}</td>
                                            <td>{{ $gateway->code }}</td>
                                            <td>
                                                <form action="{{ route('delete_item', ['id' => $gateway->id, 'type' => 'Gateways']) }}" method="post">
                                                    @csrf
                                                    <label class="badge badge-danger p-2" type="button" for="submit">Delete</label>
                                                    <input type="submit" class="d-none" id="submit">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <form method="POST" action="{{ route('admin_gateways') }}">
                        @csrf
                        <div class="card-body">
                            <h5 class="">Add Gateway</h5>
                            <div class="form-group mt-3">
                                <label>Gateway Name</label>
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="E.g: Bitcoin, Ethereum, USDT">
                            </div>

                            <div class="form-group mt-3">
                                <label>Gateway code</label>
                                <input type="text" name="code" class="form-control form-control-sm" placeholder="E.g: btc, eth, usdt">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mr-2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
            <!-- Modal -->
        </div>

    </div>
@endsection
