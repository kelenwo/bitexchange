<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/chartist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
            <a href="{{ route('dashboard') }}" class="navbar-brand brand-logo logo5"><img src="{{ asset('images/index/logo.png') }}" alt="logo" id="logo"></a>

            <a href="{{ route('dashboard') }}" class="navbar-brand brand-logo-mini logo5"><img src="{{ asset('images/index/logo.png') }}" alt="logo" id="logo"></a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">

            <ul class="navbar-nav navbar-nav-right ml-auto">

                <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{ asset('images/user.png') }}" alt="Profile image"> <span class="font-weight-normal"> {{ Auth::user()->name }} </span></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
{{--                        <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> View Profile</a>--}}
                        <a class="dropdown-item" href="{{ route('account') }}"><i class="dropdown-item-icon icon-speech text-primary"></i> Konto Sicherheit</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="dropdown-item-icon icon-power text-primary"></i>Logout</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper ">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas position-fixed" id="sidebar">
            <ul class="nav ps-3">

                <li class="nav-item my-2 mt-5">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="menu-title">Armaturenbrett</span>
                    </a>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" data-toggle="collapse" href="#deposit" aria-expanded="false" aria-controls="deposit">
                        <span class="menu-title">Kaution</span>
                        <i class="icon-arrow-down menu-icon"></i>
                    </a>
                    <div class="collapse" id="deposit">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('deposit') }}">Kaution</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('deposit_history') }}">Einzahlungsverlauf</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" data-toggle="collapse" href="#investment" aria-expanded="false" aria-controls="deposit">
                        <span class="menu-title">Investition</span>
                        <i class="icon-arrow-down menu-icon"></i>
                    </a>
                    <div class="collapse" id="investment">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('investment') }}">Investieren</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('investment_list') }}">Investitionen</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('investment_history') }}">Investitionsgeschichte</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" data-toggle="collapse" href="#withdrawal" aria-expanded="false" aria-controls="withdrawal">
                        <span class="menu-title">Rückzug</span>
                        <i class="icon-arrow-down menu-icon"></i>
                    </a>
                    <div class="collapse" id="withdrawal">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('withdrawal') }}">Rückzug</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('withdrawal_history') }}">Auszahlungsverlauf</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" href="{{ route('transactions') }}">
                        <span class="menu-title">Transaktionen</span>
                    </a>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" data-toggle="collapse" href="#account" aria-expanded="false" aria-controls="account">
                        <span class="menu-title">Konto</span>
                        <i class="icon-arrow-down menu-icon"></i>
                    </a>
                    <div class="collapse" id="account">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('account') }}">Account Einstellungen</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('account_security') }}">Sicherheit</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-2">
                    <a class="nav-link" href="{{ route('referral') }}">
                        <span class="menu-title">Verweisung</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            <footer class="footer pt-4">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © v9ai.de 2023</span>
               </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('js/dashboard/dashboard.js') }}"></script>

<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendors/chartist/chartist.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/dashboard/off-canvas.js') }}"></script>
<script src="{{ asset('js/dashboard/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('js/fa.js') }}"></script>
<!-- End custom js for this page -->
</body>
</html>
