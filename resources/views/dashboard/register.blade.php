<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V9ai - Create Account</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-5 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ asset('images/logo.svg') }}">
                        </div>
                        <h4>OPEN ACCOUNT TO START</h4>
                        <form class="pt-3">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect2">
                                    <option>Country</option>
                                    <option>United States of America</option>
                                    <option>United Kingdom</option>
                                    <option>India</option>
                                    <option>Germany</option>
                                    <option>Argentina</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Retype Password</label>
                                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Your Usdt (trc20) Account ID</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Your Usdt (trc20) Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your Ethereum Account ID</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Your Ethereum Account ID">
                            </div>

                            <div class="form-group">
                                <label>Your Bitcoin Account ID</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Your Bitcoin Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your BNB (bep20) Account ID</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Your BNB (bep20) Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your TRX Account ID</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Your TRX Account ID">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input"> I agree to the terms of service </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('js/dashboard/off-canvas.js') }}"></script>
<script src="{{ asset('js/dashboard/misc.js') }}"></script>
</body>
</html>
