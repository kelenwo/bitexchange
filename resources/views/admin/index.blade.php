@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="content-wrapper mt-0+">
        <div class="mt-3">
            <h4 class="font-weight-medium d-lg-flex">Welcome {{ Auth::user()->name }}!</h4>
        </div>
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body pt-2">
                    <div class="row report-inner-cards-wrapper">
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Users</span>
                                <h4>123</h4>
                            </div>
                            <div class="inner-card-icon bg-dark rounded-3">
                                <i class="icon-people"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Deposits</span>
                                <h4>30</h4>
                            </div>
                            <div class="inner-card-icon bg-danger rounded-3">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Withdrawals</span>
                                <h4>26</h4>
                            </div>
                            <div class="inner-card-icon bg-warning rounded-3">
                                <i class="icon-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Transactions</span>
                                <h4>25</h4>
                            </div>
                            <div class="inner-card-icon bg-primary rounded-3">
                                <i class="icon-chart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Pending Deposits</h4>
                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Deposits</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="font-weight-bold">User</th>
                                <th class="font-weight-bold">Amount</th>
                                <th class="font-weight-bold">Gateway</th>
                                <th class="font-weight-bold">Deposit ID</th>
                                <th class="font-weight-bold">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Katie Holmes
                                </td>
                                <td>$3621</td>
                                <td>alipay</td>
                                <td>04 Jun 2019</td>
                                <td>
                                    <div class="badge badge-warning p-2">Pending</div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Pending Withdrawal</h4>
                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Withdrawals</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="font-weight-bold">User</th>
                                <th class="font-weight-bold">Amount</th>
                                <th class="font-weight-bold">Gateway</th>
                                <th class="font-weight-bold">Withdrawal ID</th>
                                <th class="font-weight-bold">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Katie Holmes
                                </td>
                                <td>$3621</td>
                                <td>alipay</td>
                                <td>04 Jun 2019</td>
                                <td>
                                    <div class="badge badge-warning p-2">Pending</div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
