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
                            <a href="{{ route('/') }}" class="navbar-brand logo5"><img src="{{ asset('images/index/logo.png') }}" alt="logo" id="logo"></a>
                        </div>
                        <h4>OPEN ACCOUNT TO START</h4>
                        @if(Session::has('error'))
                            <div class="py-2 alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form class="pt-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="username" class="form-control form-control-sm" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address <span class="text-danger">*</span></label>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Country <span class="text-danger">*</span></label>
                                @error('country')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <select name="country" class="form-control form-control-sm" required>
                                    <option>Country</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="India">India</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Argentina">Argentina</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>Retype Password <span class="text-danger">*</span></label>
                                <input type="password" name="password_again" class="form-control form-control-sm" placeholder="Password Again" required>
                            </div>
                            <div class="form-group">
                                <label>Your Usdt (trc20) Account ID</label>
                                <input type="text" name="usdt" class="form-control form-control-sm" placeholder="Your Usdt (trc20) Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your Ethereum Account ID</label>
                                <input type="text" name="eth" class="form-control form-control-sm" placeholder="Your Ethereum Account ID">
                            </div>

                            <div class="form-group">
                                <label>Your Bitcoin Account ID</label>
                                <input type="text" name="btc" class="form-control form-control-sm" placeholder="Your Bitcoin Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your BNB (bep20) Account ID</label>
                                <input type="text" name="bnb" class="form-control form-control-sm" placeholder="Your BNB (bep20) Account ID">
                            </div>
                            <div class="form-group">
                                <label>Your TRX Account ID</label>
                                <input type="text" name="trx" class="form-control form-control-sm" placeholder="Your TRX Account ID">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="agreement" class="form-check-input"> I agree to the terms of service </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" disabled>SIGN UP</button>
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

<script>
    $(document).ready(function () {
        $("input[name=agreement]").on("change", function () {
            if ($(this).prop("checked")) {
                $("button[type=submit]").removeAttr("disabled");
            } else {
                $("button[type=submit]").attr("disabled", "disabled");
            }
        });

    })
</script>
</body>
</html>
