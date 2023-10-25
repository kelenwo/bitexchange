@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Deposit </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">

            <h6>Your deposits:</h6><br>

            <b>Total: $0.00</b><br><br>

            <table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="3" align="center"><b>Plan 1</b></td>
                            </tr><tr>
                                <td class="inheader">Plan</td>
                                <td class="inheader" width="200">Deposit Amount</td>
                                <td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
                            </tr>
                            <tr>
                                <td class="item"></td>
                                <td class="item" align="right">$50.00 - $10000.00</td>
                                <td class="item" align="right">10.00</td>
                            </tr>
                            </tbody></table>
                        <br>
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="4"><b>No deposits for this plan</b></td>
                            </tr>
                            </tbody></table>
                        <br>
                    </td></tr></tbody></table>
            <br>
            <table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="3" align="center"><b>Plan 2</b></td>
                            </tr><tr>
                                <td class="inheader">Plan</td>
                                <td class="inheader" width="200">Deposit Amount</td>
                                <td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
                            </tr>
                            <tr>
                                <td class="item"></td>
                                <td class="item" align="right">$10000.00 - $50000.00</td>
                                <td class="item" align="right">15.00</td>
                            </tr>
                            </tbody></table>
                        <br>
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="4"><b>No deposits for this plan</b></td>
                            </tr>
                            </tbody></table>
                        <br>
                    </td></tr></tbody></table>
            <br>
            <table cellspacing="1" cellpadding="2" border="0" width="100%" class="line"><tbody><tr><td class="item">
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="3" align="center"><b>Plan 3</b></td>
                            </tr><tr>
                                <td class="inheader">Plan</td>
                                <td class="inheader" width="200">Deposit Amount</td>
                                <td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
                            </tr>
                            <tr>
                                <td class="item"></td>
                                <td class="item" align="right">$50000.00 and more</td>
                                <td class="item" align="right">25.00</td>
                            </tr>
                            </tbody></table>
                        <br>
                        <table cellspacing="1" cellpadding="2" border="0" width="100%"><tbody><tr>
                                <td colspan="4"><b>No deposits for this plan</b></td>
                            </tr>
                            </tbody></table>
                        <br>
                    </td></tr></tbody></table>
        </div>
    </div>
@endsection
