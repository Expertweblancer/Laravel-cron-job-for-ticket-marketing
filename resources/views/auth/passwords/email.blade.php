 <!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forgot Password Page</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('app-assets/img/ico/apple-icon-60.png') !!} ">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('app-assets/img/ico/apple-icon-76.png') !!} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('app-assets/img/ico/apple-icon-120.png') !!} ">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('app-assets/img/ico/apple-icon-152.png') !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('app-assets/img/ico/favicon.ico') !!} ">
    <link rel="shortcut icon" type="image/png" href="{!! asset('app-assets/img/ico/favicon-32.png') !!} ">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/fonts/feather/style.min.css') !!} ">
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/fonts/simple-line-icons/style.css') !!} ">
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') !!} ">
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/vendors/css/perfect-scrollbar.min.css') !!} ">
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/vendors/css/prism.min.css') !!} ">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{!! asset('app-assets/css/app.css') !!}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Forgot Password Starts-->
            <section id="forgot-password">
            <div class="container-fluid forgot-password-bg">
                <div class="row full-height-vh m-0 d-flex align-items-center justify-content-center">
                <div class="col-md-7 col-sm-12">
                    <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="card-content">
                        <div class="card-body fg-image">
                        <div class="row m-0">
                            <div class="col-lg-6 d-none d-lg-block text-center py-2">
                            <img src="{!! asset('app-assets/img/gallery/forgot.png') !!} " alt="" class="img-fluid" width="300" height="230">
                            </div>
                            <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                            <h4 class="mb-2 card-title">Recover Password</h4>
                            
                            <p class="card-text mb-3">
                                Please enter your email address and we'll send you
                                instructions on how to reset your password.
                            </p>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror mb-3" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="fg-actions d-flex justify-content-between">
                                <div class="login-btn">
                                <button class="btn btn-outline-primary">
                                    <a href="{{route('login')}}" class="text-decoration-none">Back To Login</a>
                                </button>
                                </div>
                                <div class="recover-pass">
                                <button class="btn btn-primary" type="submit">
                                    Recover
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
<!--Forgot Password Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{!! asset('app-assets/vendors/js/core/jquery-3.2.1.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/core/popper.min.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/core/bootstrap.min.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/prism.min.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/jquery.matchHeight-min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/screenfull.min.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/vendors/js/pace/pace.min.js') !!}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{!! asset('app-assets/js/app-sidebar.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('app-assets/js/notification-sidebar.js') !!} " type="text/javascript"></script>
    <script src="{!! asset('app-assets/js/customizer.js') !!} " type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>
