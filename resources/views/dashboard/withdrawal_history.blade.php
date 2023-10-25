@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Transactions </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Withdrawal History</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid mt-4">
            <form>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <select name="type" onchange="document.opts.submit();" class="form-control select form-select">
                            <option value="">All transactions</option>
                            <option value="deposit" selected>Deposit</option>
                            <option value="withdrawal">Withdrawal</option>
                            <option value="earning">Earning</option>
                            <option value="commissions">Referral commission</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <select name="ec" class="form-control form-select inpts">
                            <option value="-1">All eCurrencies</option>
                            <option value="1000">Usdt (trc20)</option>
                            <option value="1001">Bitcoin</option>
                            <option value="1002">Ethereum</option>
                            <option value="1003">BNB (bep20)</option>
                            <option value="1004">TRX</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        From:
                    </div>
                    <div class="col-md-4 form-group" style="margin-top: -1rem">
                        <select name="month_from" class="form-control form-select inpts">
                            <option value="1">Jan</option>
                            <option value="2">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10" selected>Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group" style="margin-top: -1rem">
                        <select name="day_from" class="form-control form-select inpts">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                    <div class="col-md-2 form-group" style="margin-top: -1rem">
                        <select name="year_from" class="form-control form-select inpts">
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023" selected>2023</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        To:
                    </div>
                    <div class="col-md-4 form-group" style="margin-top: -1rem">
                        <select name="month_to" class="form-control form-select inpts">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10" selected>October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-2 form-group" style="margin-top: -1rem">
                        <select name="day_to" class="form-control form-select inpts">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                    <div class="col-md-2 form-group" style="margin-top: -1rem">
                        <select name="year_to" class="form-control form-select inpts">
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023" selected>2023</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <table cellspacing="1" cellpadding="2" border="0" width="100%" class="table table-hover mt-5">
                <tbody>
                <tr>
                    <th class="inheader"><b>Type</b></th>
                    <th class="inheader" width="200"><b>Amount</b></th>
                    <th class="inheader" width="170"><b>Date</b></th>
                </tr>
                <tr>
                    <td colspan="3" align="center">No transactions found</td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li>
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li>
            </ul>
        </div>
    </div>
@endsection
