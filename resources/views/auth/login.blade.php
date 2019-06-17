<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
</head>

<body data-col="1-column" class=" 1-column  blank-page">
<div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Login Page Starts-->
            <section id="login">
              <div class="container-fluid">
                <div class="row full-height-vh m-0">
                  <div class="col-12 d-flex align-items-center justify-content-center">

                    <div class="card">
                            <div class="card-content">
                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="card-body login-img">
                                <div class="row m-0">
                                    <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                                    <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="400" height="230">
                                    </div>
                                    <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                                    <h4 class="mb-2 card-title">{{ __('Login') }}</h4>
                                    <p class="card-text mb-3">
                                        Welcome back, please login to your account.
                                    </p>
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror mb-3" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-1" name="password" required autocomplete="current-password" placeholder="Enter a Password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="remember-me">
                                        <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                        <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}/>
                                            <label class="custom-control-label" for="customCheckboxInline1">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        </div>
                                        <div class="forgot-password-option">
                                        @if (Route::has('password.request'))
                                            <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="fg-actions d-flex justify-content-between">
                                        <div class="login-btn">
                                        <!-- <button class="btn btn-outline-primary">
                                            <a href="register-page.html" class="text-decoration-none">Register</a>
                                        </button> -->
                                        </div>
                                        <div class="recover-pass">
                                            <button class="btn btn-primary" type="submit">
                                               {{ __('Login') }} 
                                            </button>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="d-flex justify-content-between mt-3">
                                        <div class="option-login">
                                        <h6 class="text-decoration-none text-primary">Or Login With</h6>
                                        </div>
                                        <div class="social-login-options">
                                        <a class="btn btn-social-icon mr-2 btn-facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="btn btn-social-icon mr-2 btn-twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        </div>
                                    </div>
                                    </div>
                                   
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>

                  </div>
                </div>
              </div>
            </section>
<!--Login Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
</body>
</html>