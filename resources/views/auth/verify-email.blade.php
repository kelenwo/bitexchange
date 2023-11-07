<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>V9ai - Account Login</title>
    <!-- plugins:css -->

    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.css') }}">
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
            <div class="col-lg-7 mx-auto py-5">
              <div class="auth-form-light text-center p-5">
                  @if(Session::has('success'))
                      <div class="py-2 alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
                  @endif

                <h2 class="font-weight-light">Account was created successfully
                    <br><br>
                    A verification email has been sent to your email address.
                </h2>
                  <div>
                      <form method="post" action="{{ route('verification.send') }}">
                          @csrf
                          <button type="submit" class="btn btn-link">Resend Verification Email</button>
                      </form>
                  </div>
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
