<!doctype html>
<html lang="en" dir="ltr">
  <head>
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
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

		<!-- Title -->
		<title>Ticket Business</title>
		<link rel="stylesheet" href="{{ asset('assets\fonts\fonts\font-awesome.min.css') }}">
		<link href="{{ asset('assets\plugins\count-down\jquerysctipttop.css') }}" rel="stylesheet" type="text/css">

		<!-- Font family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		
		<!-- Sidemenu Css -->
		<link href="{{ asset('assets\plugins\fullside-menu\css\style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets\plugins\fullside-menu\waves.min.css') }}" rel="stylesheet">
		
		<!-- Dashboard Css -->
		<link href="{{ asset('assets\css\dashboard.css') }}" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="{{ asset('assets\plugins\charts-c3\c3-chart.css') }}" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.css') }}" rel="stylesheet">
		<link href="{{ asset('assets\plugins\count-down\flipclock.css') }}" rel="stylesheet">

		<!---Font icons-->
		<link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet">

  </head>
	<body>
		<div class="login-img">
			<div id="global-loader"></div>
			<div class="page">
				<div class="page-single">
					<div class="container">
						<div class="row text-center  mx-auto authentication">
							<div class="col-lg-8 col-sm-12 center-block align-items-center construction  ">
								<div class="text-white">
									<div class="card-body">
										<h2 class="display-2 mb-0"><strong>Coming Soon</strong></h2>
										<div class="countdown-timer-wrapper">
											<div class="timer" id="countdown"></div>
										</div>
										<p>we apologize for your in-convenience....any quaries contact me </p>
										<h4><strong>Contact:</strong> <a href="mailto:tktundrgrnd@gmail.com"> tktundrgrnd@gmail.com</a></h4>
										<div class="text-center ">
											<div class="flex-c-m ">
												<a href="#" class="login100-social-item bg1">
													<i class="fa fa-facebook fb-blue"></i>
												</a>
												<a href="#" class="login100-social-item bg2">
													<i class="fa fa-twitter"></i>
												</a>
												<a href="#" class="login100-social-item bg3">
													<i class="fa fa-google"></i>
												</a>
												<a href="{{ route('home') }}" class="login100-social-item bg2">
													<i class="fa fa-level-up"></i>
												</a>
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
		<!-- Dashboard js -->
		<script src="{{ asset('assets\js\vendors\jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('assets\js\vendors\bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets\js\vendors\jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets\js\vendors\selectize.min.js') }}"></script>
		<script src="{{ asset('assets\js\vendors\jquery.tablesorter.min.js') }}"></script>
		<script src="{{ asset('assets\js\vendors\circle-progress.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\rating\jquery.rating-stars.js') }}"></script>
		
		<!-- Fullside-menu Js-->
		<script src="{{ asset('assets\plugins\fullside-menu\jquery.slimscroll.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\fullside-menu\waves.min.js') }}"></script>
		
		<!-- Custom scroll bar Js-->
		<script src="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js') }}"></script>
        
		<!--Time Counter -->
		
		<script src="{{ asset('assets\plugins\counters\counter.js') }}"></script>

		<!--Counters -->
		<script src="{{ asset('assets\plugins\count-down\countdown-timer.js') }}"></script>
		
		<!-- Custom Js-->
		<script src="{{ asset('assets\js\custom.js') }}"></script>
		
		<!--Counters js-->
		<script>
			$(document).ready(function () {

				var myDate = new Date();
				myDate.setDate(myDate.getDate() + 2);
				$("#countdown").countdown(myDate, function (event) {
					$(this).html(
						event.strftime(
							'<div class="timer-wrapper"><div class="time">%D</div><span class="text">days</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">hrs</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">mins</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">sec</span></div>'
						)
					);
				});

			});
		</script>
	</body>
</html>
