@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> All Withdrawals </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Withdrawals</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Withdrawals</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="font-weight-bold">User</th>
                                <th class="font-weight-bold">Amount</th>
                                <th class="font-weight-bold">Gateway</th>
                                <th class="font-weight-bold">Withdrawal ID</th>
                                <th class="font-weight-bold">Status</th>
                                <th class="font-weight-bold">Actions</th>
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
                                <td>
                                    <span class="badge badge-info p-2" type="button" data-toggle="modal" data-target="#depositModal"><i class="fa fa-search"></i> View</span>

                                    <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
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
                                                                        <td>Withdrawal ID:</td>
                                                                        <td>26</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Withdrawal Hash:</td>
                                                                        <td>4C2504B8DD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>User:</td>
                                                                        <td><a href="./?a=users&amp;b=edit&amp;id=2">arbitrage@bot.com</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Amount:</td>
                                                                        <td>13.00 USD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gateway:</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Reference Number:</td>
                                                                        <td>USD2F4662B40E</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gateway Transaction ID:</td>
                                                                        <td>n/a</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Date:</td>
                                                                        <td>25/11/2021 09:36:21</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Processed on:</td>
                                                                        <td>n/a</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status:</td>
                                                                        <td>
                                                                            <span class="badge badge-warning">Pending</span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <div class="my-2">
                                                                    <form action="" method="POST">
                                                                        <button type="submit" class="btn btn-success btn-sm" name="btn_action" value="process_deposit">Approve Withdrawal</button>
                                                                        <button type="submit" class="btn btn-danger btn-sm" name="btn_action" value="cancel_deposit">Cancel Withdrawal</button>
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
