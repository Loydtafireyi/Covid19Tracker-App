<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Zimbabwe Covid19 Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Zimbabwe Covid19 online tracker. Deaths {{ $deaths->sum('deaths') }}, Infected {{ $infections->sum('infections') }}, Recovered {{ $recovered->sum('recovered') }}, Tests {{ $tests->sum('tests') }} . Track COVID-19 local coronavirus cases with active, recoveries and death rate on the map." name="description" />
        <meta name="keywords" content="The latest maps and charts on the spread of COVID-19 in Zimbabwe, including cases, deaths, closures and restrictions, Corona virus Zimbabwe, coronavirus death in zimbabwe, covid19 coronavirus statistics in Zimbabwe, harare covid19, Bulawayo corona virus stats, covid19 in zimbabwe by province, Live statistics and coronavirus news tracking the number of confirmed cases, recovered patients, tests, and death toll due to the COVID-19 coronavirus from Zimbabwe">
        <meta property="og:image" content="https://covid19zim.online/frontend/images/zimbabwe (1).svg">
        <meta property="og:url" content="https://covid19zim.online/">
        <meta content="Loyd" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/zimbabwe (1).svg') }}">

        <!--Morris Chart-->
        <link rel="stylesheet" href="{{ asset('frontend/libs/morris-js/morris.css') }}" />

        <!-- App css -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/zim-map.css') }}">

        <!-- jvectormap -->
        <link href="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive Table css -->
        <link href="{{ asset('frontend/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <style type="text/css">
    /*Whatsapp support button*/

        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:60px;
            left:20px;
            background-color:#25d366;
            color:#fff;
            border-radius:50px;
            text-align:center;
          font-size:30px;
            box-shadow: 2px 2px 3px #999;
          z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
    
                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>

                        @auth
                            <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <!-- <span class="badge badge-danger rounded-circle noti-icon-badge">9</span> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                              
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
                        @endauth
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="/" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('frontend/images/zimbabwe (1).svg') }}" alt="" height="40">
                                <span class="logo-lg-text-light">Zimbabwe Covid19 Tracker</span>
                            </span>
                            <span class="logo-sm">
                                <span class="logo-lg-text-light">Covid19 App</span>
                                <img src="{{ asset('frontend/images/zimbabwe (1).svg') }}" alt="" height="30">
                            </span>
                        </a>
                    </div>
    
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="/"><i class="fas fa-chart-pie"></i>Covid19 Statistics Overview</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('provinces') }}"> <i class="fas fa-chart-line"></i>Zimbabwe Statistcs By Provinces</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('isolation') }}"> <i class="fas fa-clinic-medical"></i></i>Isolation Centres</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ env('PAYNOW_DONATE') }}" target="_blank"> <i class="mdi mdi-invert-colors"></i></i>Donate</a>

                            </li>

                            <li class="has-submenu">
                                <a type="button" class="btn btn-danger text-white w-md waves-effect waves-light mr-3"><i class="mdi mdi-plus"></i> Report Self-Positive</a>
                            </li>

                            @auth


                            @else
                            
                            <li class="has-submenu">
                                <a href="{{ route('login') }}"> <i class="mdi mdi-chevron-triple-right"></i>Login</a>
                            </li>
                            
                            @endauth


                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Zimbabwe</a></li>
                                    <li class="breadcrumb-item active">Covid19 Statistics</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Zimbabwe Covid19 Statistics</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 


                @yield('content')

        <!-- Whatsapp support button -->
        <a href="{{ env('WHATSAPP') }}" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i>
        </a>

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2020 &copy; Covid App By <a href="{{ env('WHATSAPP') }}">Loyd & Eloquent Geeks</a> 

                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="{{ env('WHATSAPP') }}">Help</a>
                            <a href="{{ env('WHATSAPP') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Vendor js -->
        <script src="{{ asset('frontend/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('frontend/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('frontend/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{ asset('frontend/libs/raphael/raphael.min.js') }}"></script>

        <!-- Dashboard init js-->
        <script src="{{ asset('frontend/js/pages/dashboard.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('frontend/js/app.min.js') }}"></script>

         <script src="https://kit.fontawesome.com/661021e154.js" crossorigin="anonymous"></script>

        <!-- Zimbabwe map scripts -->
        @yield('map-scripts')

        <!-- Table scripts -->
        @yield('table-scripts')
    </body>
</html>