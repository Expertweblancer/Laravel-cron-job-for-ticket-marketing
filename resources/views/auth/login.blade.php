<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Title -->
    <title>Ticket Master</title>
    <link rel="stylesheet" href="assets\fonts\fonts\font-awesome.min.css">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    
    <!-- Sidemenu Css -->
    <link href="assets\plugins\fullside-menu\css\style.css" rel="stylesheet">
    <link href="assets\plugins\fullside-menu\waves.min.css" rel="stylesheet">
    
    <!-- Dashboard Css -->
    <link href="assets\css\dashboard.css" rel="stylesheet">
    
    <!-- c3.js Charts Plugin -->
    <link href="assets\plugins\charts-c3\c3-chart.css" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="assets\plugins\scroll-bar\jquery.mCustomScrollbar.css" rel="stylesheet">

    <!---Font icons-->
    <link href="assets\css\icons.css" rel="stylesheet">
</head>

<body data-col="1-column" class=" 1-column  blank-page">
    <div class="login-img">
        <div id="global-loader"></div>
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row authentication">
                        <div class="col col-login mx-auto">
                            <div class="text-center mb-6">
                                <img src="assets\images\brand\logo.png" class="h-8" alt="">
                            </div>
                            <form class="card" method="post" action="{{ route('login') }}"">
                            @csrf
                                <div class="card-body p-6 ">
                                    <div class="card-title text-center">Login to your Account</div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="mdi mdi-account"></i>
                                        </span>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror mb-3" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-icon form-group wrap-input">
                                        <span class="input-icon-addon search-icon">
                                            <i class="zmdi zmdi-lock"></i>
                                        </span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror mb-1" id="exampleInputPassword1" name="password" required autocomplete="current-password" placeholder="Enter a Password" >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label">
                                        @if (Route::has('password.request'))
                                            <a class="float-right small" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                             
                                        </label>
                                    </div>
                                    <div class="form-group mt-5">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="text-center text-muted mt-3">
                                        Don't have account yet?
                                         <!-- <a href="{{route('register')}}">Sign up</a> -->
                                    </div>
                                    <div class="flex-c-m text-center mt-5">
                                        <a href="#" class="login100-social-item bg1">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" class="login100-social-item bg2">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" class="login100-social-item bg3">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets\js\vendors\jquery-3.2.1.min.js"></script>
    <script src="assets\js\vendors\bootstrap.bundle.min.js"></script>
    <script src="assets\js\vendors\jquery.sparkline.min.js"></script>
    <script src="assets\js\vendors\selectize.min.js"></script>
    <script src="assets\js\vendors\jquery.tablesorter.min.js"></script>
    <script src="assets\js\vendors\circle-progress.min.js"></script>
    <script src="assets\plugins\rating\jquery.rating-stars.js"></script>
    
    <!-- Fullside-menu Js-->
    <script src="assets\plugins\fullside-menu\jquery.slimscroll.min.js"></script>
    <script src="assets\plugins\fullside-menu\waves.min.js"></script>
    
    <!-- Custom scroll bar Js-->
    <script src="assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Js-->
    <script src="assets\js\custom.js"></script>
</body>
</html>