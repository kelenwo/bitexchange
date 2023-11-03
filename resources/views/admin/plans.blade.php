@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Manage Plans </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Plans</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                        <div class="card-body">
                            <h5 class="">Plans</h5>

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
                                            <th class="font-weight-bold">ROI</th>
                                            <th class="font-weight-bold">Duration</th>
                                            <th class="font-weight-bold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $plan->name }}</td>
                                            <td>%{{ $plan->roi }}</td>
                                            <td>{{ $plan->duration }}</td>
                                            <td>
                                                <form action="{{ route('delete_item', ['id' => $plan->id, 'type' => 'Plans']) }}" method="post">
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
                    <form method="POST" action="{{ route('admin_plans') }}">
                        @csrf
                        <div class="card-body">
                            <h5 class="">Add Plan</h5>
                            <div class="form-group mt-3">
                                <label for="name">Plan Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="">
                            </div>

                            <div class="form-group mt-3">
                                <label for="roi">ROI (%)</label>
                                <input type="number" name="roi" id="roi" value="10" class="form-control form-control-sm" placeholder="" step="1">
                            </div>
                            <div class="form-group mt-3">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" id="duration" class="form-control form-control-sm" placeholder="E.g: 24 hours, 72 hours">
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
