@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Manage Users </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Users</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">Full Name</th>
                                    <th class="font-weight-bold">Email Address</th>
                                    <th class="font-weight-bold text-center">Email Verified</th>
                                    <th class="font-weight-bold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        @if($user->email_verified_at)
                                            <span class="badge badge-success"><i class="fa fa-check"></i> Yes</span>
                                        @endif

                                        @if(!$user->email_verified_at)
                                            <span class="badge badge-danger"><i class="fa fa-times"></i> No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="badge badge-info p-2" href="{{ route('user.account', ['id' => $user->id]) }}">Edit</a> |
                                        <form action="{{ route('delete_item', ['id' => $user->id, 'type' => 'Users']) }}" method="post">
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

    </div>
@endsection
