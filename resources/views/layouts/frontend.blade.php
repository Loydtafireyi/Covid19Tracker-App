<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        @yield('seo')

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/zimbabwe (1).svg') }}">

        <!--Morris Chart-->
        <link rel="stylesheet" href="{{ asset('frontend/libs/morris-js/morris.css') }}" />

        <!-- App css -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/zim-map.css') }}">

        <!-- jvectormap -->
        <link href="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive Table css -->
        <link href="{{ asset('frontend/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162750660-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-162750660-2');
        </script>


        @yield('css')

    </head>

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
    
                        <!-- Search Component -->
                        <div id="app">
                            <search></search>
                        </div>

                        @auth

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
    
                                <!-- item-->
                                @if(auth()->user()->isAdmin())
                                <a href="{{ route('home') }}" target="_blank"  class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Admin Dashboard</span>
                                </a>
                                @endif
    
                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Profile</span>
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
                                <a href="/"><i class="fas fa-chart-pie"></i>Cases Overview</a>
                            </li>

                             <li class="has-submenu">
                                <a href="{{ route('funds') }}"><i class="fas fa-search-dollar"></i>Funds Tracker</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('provinces') }}"> <i class="fas fa-chart-line"></i>Stats By Provinces</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('isolation') }}"> <i class="fas fa-clinic-medical"></i></i>Isolation Centres</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('donate.create') }}"> <i class="mdi mdi-invert-colors"></i></i>Donate</a>

                            </li>

                            <li class="has-submenu">
                                <a type="button" href="{{ route('self-positive.create') }}" class="btn btn-danger text-white w-md waves-effect waves-light mr-3"><i class="mdi mdi-plus"></i>Self-Positive</a>
                            </li>

                             <li class="has-submenu">
                                <a href="/api/docs" target="_blank"> <i class="fas fa-code-branch"></i></i>REST API</a>

                            </li>

                            @auth


                            @else
                            
                            <li class="has-submenu">
                                <a href="{{ route('login') }}">Login</a>
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

            @yield('page_title')

            @yield('content')

        <!-- Whatsapp support button -->
        <a href="{{ env('WHATSAPP') }}" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i>
        </a>

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2020 &copy; Covid App By <a href="{{ env('WHATSAPP') }}">Eloquent Geeks & Blck</a> 

                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="{{ route('terms') }}">Terms & Conditions</a>
                            <a href="{{ route('privacy') }}">Privacy Policy</a>
                            <a href="/about">About</a>
                            <a href="/about" target="_blank">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Vendor js -->
        <script src="{{ asset('frontend/js/vendor.min.js') }}"></script>
        <!-- App js-->
        <script src="{{ asset('frontend/js/app.min.js') }}"></script>

        <!-- Custom js-->
        <script src="{{ asset('frontend/js/custom.js') }}"></script>

         <script src="https://kit.fontawesome.com/661021e154.js" crossorigin="anonymous"></script>

        <!-- Zimbabwe map scripts -->
        @yield('map-scripts')

        <!-- Table scripts -->
        @yield('table-scripts')

        @yield('scripts')

    </body>
</html>