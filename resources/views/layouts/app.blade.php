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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>Ticket Business</title>


    <!-- Title -->
    <link rel="stylesheet" href="{{ asset('assets\fonts\fonts\font-awesome.min.css') }}">

    <!-- Sidemenu Css -->
    <link href="{{ asset('assets\plugins\fullside-menu\css\style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\fullside-menu\waves.min.css') }}" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="{{ asset('assets\css\dashboard.css') }}" rel="stylesheet">

    <!-- Morris.js Charts Plugin -->
    <link href="{{ asset('assets\plugins\morris\morris.css') }}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.css') }}" rel="stylesheet">

    <!---Font icons-->
    <link href="{{ asset('assets\css\icons.css') }}" rel="stylesheet ">

		<link href="{{ asset('assets\plugins\calendar2\css\tui-time-picker.css') }}" rel="stylesheet">
		<link href="{{ asset('assets\plugins\calendar2\css\tui-date-picker.css') }}" rel="stylesheet">
		<link href="{{ asset('assets\plugins\calendar2\css\tui-calendar.css') }}" rel="stylesheet">
		<link href="{{ asset('assets\plugins\calendar2\css\default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\calendar2\css\icons.css') }}" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

      
  </head>


  <body class="">
      <div id="global-loader"></div>
      <div class="page">
        <div class="page-main">
          <div class="app-header1 header py-1 d-flex">
            <div class="container-fluid">
              <div class="d-flex">
                <a class="header-brand" href="{{route('home')}}">
                  <img src="{{asset('assets\images\brand\logo.png')}}" class="header-brand-img" alt="adminor logo">
                </a>
                <div class="menu-toggle-button">
                  <a class="nav-link wave-effect" href="#" id="sidebarCollapse">
                    <span class="fa fa-bars"></span>
                  </a>
                </div>
                <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                  <div class="p-2">
                    <form class="input-icon" action="{{ route('event_search')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="input-icon-addon">
                        <i class="fe fe-search"></i>
                      </div>
                      <input type="search" name="item" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                    </form>


        
                  </div>

                  <div class="dropdown d-none d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                      <i class="fa fa-expand" id="fullscreen-button"></i>
                    </a>
                  </div>

                  <!-- <div class="dropdown d-none d-md-flex">
                    <a class="nav-link icon" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      <span class="nav-unread bg-warning"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <div class="notifyimg">
                          <i class="fa fa-thumbs-o-up"></i>
                        </div>
                        <div>
                          <strong>Someone likes our posts.</strong>
                          <div class="small text-muted">3 hours ago</div>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <div class="notifyimg">
                          <i class="fa fa-commenting-o"></i>
                        </div>
                        <div>
                          <strong> 3 New Comments</strong>
                          <div class="small text-muted">5  hour ago</div>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <div class="notifyimg">
                          <i class="fa fa-cogs"></i>
                        </div>
                        <div>
                          <strong> Server Rebooted.</strong>
                          <div class="small text-muted">45 mintues ago</div>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item text-center">View all Notification</a>
                    </div>
                  </div> -->
                  <!-- <div class="dropdown d-none d-md-flex">
                    <a class="nav-link icon text-center" data-toggle="dropdown">
                      <i class="icon icon-speech"></i>
                      <span class=" nav-unread badge badge-info badge-pill">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a href="#" class="dropdown-item text-center">2 New Messages</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{ asset('assets/images/faces/male/41.jpeg') }}"></span>
                        <div>
                          <strong>Madeleine</strong> Hey! there I' am available....
                          <div class="small text-muted">3 hours ago</div>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{ asset('assets/images/faces/female/1.jpeg') }}"></span>
                        <div>
                          <strong>Anthony</strong> New product Launching...
                          <div class="small text-muted">5  hour ago</div>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex pb-3">
                        <span class="avatar brround mr-3 align-self-center cover-image" data-image-src="{{ asset('assets/images/faces/female/18.jpeg') }}"></span>
                        <div>
                          <strong>Olivia</strong> New Schedule Realease......
                          <div class="small text-muted">45 mintues ago</div>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item text-center">See all Messages</a>
                    </div>
                  </div> -->
                  <div class="dropdown d-none d-md-flex ">
                    <a class="nav-link icon " data-toggle="dropdown">
                      <i class="fe fe-grid floating"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <ul class="drop-icon-wrap p-1">
                        <li>
                          <a href="email.html" class="drop-icon-item">
                            <i class="fe fe-mail text-dark"></i>
                            <span class="block"> E-mail</span>
                          </a>
                        </li>
                        <li>
                          <a href="calendar2.html" class="drop-icon-item">
                            <i class="fe fe-calendar text-dark"></i>
                            <span class="block">calendar</span>
                          </a>
                        </li>
                        <li>
                          <a href="maps.html" class="drop-icon-item">
                            <i class="fe fe-map-pin text-dark"></i>
                            <span class="block">map</span>
                          </a>
                        </li>
                        <!-- <li>
                          <a href="cart.html" class="drop-icon-item">
                            <i class="fe fe-shopping-cart text-dark"></i>
                            <span class="block">Cart</span>
                          </a>
                        </li>
                        <li>
                          <a href="chat.html" class="drop-icon-item">
                            <i class="fe fe-message-square text-dark"></i>
                            <span class="block">chat</span>
                          </a>
                        </li>
                        <li>
                          <a href="profile.html" class="drop-icon-item">
                            <i class="fe fe-phone-outgoing text-dark"></i>
                            <span class="block">contact</span>
                          </a>
                        </li> -->
                      </ul>
                      <!-- <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item text-center">View all</a> -->
                    </div>
                  </div>
                  <div class="dropdown text-center selector">
                    <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                      <span class="avatar avatar-sm brround cover-image" data-image-src="{{asset('assets/images/faces/male/photo.png') }}"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                      <div class="text-center">
                        <a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown"> {{Auth::user()->name}}</a>
                        <span class="text-center user-semi-title text-dark">Owner</span>
                        <div class="dropdown-divider"></div>
                      </div>
                      <!-- <a class="dropdown-item" href="#">
                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                      </a>
                      <a class="dropdown-item" href="#">
                        <span class="float-right"><span class="badge badge-primary">6</span></span>
                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                      </a> -->
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="nav-sidebar">
              <ul class="list-unstyled components" id="accordion">
                <div class="user-profile">
                  <div class="dropdown user-pro-body">
                    <div><img src="{{ asset('assets\images\faces\male\photo.png') }}" alt="user-img" class="img-circle"></div>
                    <div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold"> {{Auth::user()->name}}</span>  </a>
                    <br><span class="text-gray">Owner</span>
                    </div>
                  </div>
                </div>

                <li class="">
                  <a href="{{route('home')}}"  class="wave-effect" >
                    <i class="fa fa-desktop mr-2"></i> Dashboard
                  </a>
                   
                </li>
                <li class="">
                  <a href="#Apps" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-snowflake-o mr-2"></i> Tickets
                  </a>
                  <ul class="collapse list-unstyled" id="Apps" data-parent="#accordion">
                    
                    <li>
                      <a href="{{ route('upcoming-festivals.index')}}">Upcoming Festivals</a>
                    </li>
                    <li>
                      <a href="{{ route('ticketweb.index') }}">Ticket Web</a>
                    </li>
                    <li>
                      <a href="{{ route('flyticket.index') }}">Ticketfly</a>
                    </li>
                    <li>
                      <a href="{{ route('selectaseat.index')}}">Select a Seat</a>
                    </li>
                    <li>
                      <a href="{{ route('etix.index') }}">Etixes</a>
                    </li>
                    <li>
                      <a href="{{ route('eventbrite.index') }}">Eventbrites</a>
                    </li>
                    <li>
                      <a href="{{ route('ticket.index')}}">Custom Tickets</a>
                    </li>
                  </ul>
                </li>
                 
                 
     
                <li>
                  <a href="{{ route('statistics.index')}}" class=" wave-effect"><i class="fa fa-cubes mr-2"></i> Statistics</a>
                </li>
                <li class="">
                  <a href="#pages" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                    <i class="mdi mdi-file mr-2"></i> Pages
                  </a>
                  <ul class="collapse list-unstyled" id="pages" data-parent="#accordion">
                     
                   
                    <!-- <li>
                      <a href="{{route('mainsearch')}}">Main Search</a>
                    </li> -->
                    <li>
                      <a href="{{ route('email.create')}}">Email</a>
                    </li>
                    <li>
                      <a href="{{ route('email.index')}}">Email Inbox</a>
                    </li>
                    
                   

                    
                    <li>
                      <a href="{{ route('construction') }}">Under Construction</a>
                    </li>
                  </ul>
                </li>
               
                <li>
                  <a href="{{ route('calendar') }}" class="wave-effect" >
                    <i class="fa fa-calendar mr-2"></i> Calendar
                  </a>
                   
                </li>
                 
                <li>
                  <a href="{{ route('map') }}" class=" wave-effect"><i class="fa fa-map-marker mr-2"></i>Map</a>
                </li>
               
                 
                <li class="">
                  <a href="#Submenu6" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                    <i class="fa fa-shopping-cart mr-2"></i> Ticket business
                  </a>
                  <ul class="collapse list-unstyled" id="Submenu6" data-parent="#accordion">
                    <li>
                      <a href="{{ route('ticket-business.index') }}">Events</a>
                    </li>
                    <!-- <li>
                      <a href="shop-description.html">Product Details</a>
                    </li>
                    <li>
                      <a href="cart.html">Shopping Cart</a>
                    </li> -->
                  </ul>
                </li>
                 
              </ul>
            </nav>


  
          
              @yield('content')
           
				</div>
			</div>
        <footer class="footer">
          <div class="container">
            <div class="row align-items-center flex-row-reverse">
              <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                Copyright © 2019 <a href="#"> Ticketdatamasters.com</a>. Owner <a href="#">- Josh. </a> All rights reserved.
              </div>
            </div>
          </div>
        </footer>
        <!-- End Footer-->
      </div>

      <!-- Back to top -->
      <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

      <script src="{{ asset('assets\plugins\fullcalendar\moment.min.js') }}"></script>
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

      <!-- Dashboard Core -->
      <script src="{{ asset('assets\js\index1.js') }}"></script>

      <!--Morris.js Charts Plugin -->
      <script src="{{ asset('assets\plugins\morris\raphael-min.js') }}"></script>
      <script src="{{ asset('assets\plugins\morris\morris.js') }}"></script>

      <!-- Custom scroll bar Js-->
      <script src="{{ asset('assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js') }}"></script>

      <!-- Custom Js-->
      <script src="{{ asset('assets\js\custom.js') }}"></script>

		<script src="{{ asset('assets\plugins\fullcalendar\fullcalendar.min.js') }}"></script>

		<!-- Fullside-menu Js-->

		<!-- calendar Js-->
		<!-- <script src="{{ asset('assets\plugins\calendar2\js\tui-code-snippet.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\tui-time-picker.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\tui-date-picker.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\moment.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\chance.min.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\tui-calendar.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\calendars.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\schedules.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\dooray.js') }}"></script>
		<script src="{{ asset('assets\plugins\calendar2\js\default.js') }}"></script> -->

	 
 
		<script>
			$('#calendar').tuiCalendar;
		</script>


  </body>
</html>
