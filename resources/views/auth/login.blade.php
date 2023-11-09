<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V9ai - Account Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
      <style>
          .card-bg::before {
              content: "";
              position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
              background-image: url({{ asset('images/auth-bg.jpg')}});
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
              opacity: 0.05;
              width: 100%;
              height: 100%;
              pointer-events: none; /* Make the background image not respond to pointer events */
          }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth bg-primary">
          <div class="row flex-grow">
          <div class="col-lg-5 mx-auto px-0 bg-dark">
              <div class="auth-form-dark text-left mx-0 p-5 card-bg">
                <div class="brand-logo">
                    <a href="{{ route('/') }}" class="navbar-brand logo5"><img src="{{ asset('images/index/logo.png') }}" alt="logo" id="logo"></a>
                </div>
                <h6 class="font-weight-light">LOGIN TO ACCOUNT</h6>

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

                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create an account</a>
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
    <!-- endinject -->
  </body>
</html>
