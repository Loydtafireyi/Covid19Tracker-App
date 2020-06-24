@if(auth()->check())

@if(auth()->user()->isAdmin())
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style type="text/css">
    .col-md-3 ul li:hover{
        background-color: black !important;
    }

    .col-md-3 ul li span:hover{
        background-color: black !important;
    }
</style>

<body class="bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light sticky-top bg-dark shadow-sm border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/images/zimbabwe (1).svg') }}" alt="" height="30">
                    <span class="font-weight-bolder text-uppercase m-2 text-white">{{ config('app.name', 'Covid19') }}</span>
                </a>

                <a href="/" target="_blank" class="btn btn-success align-content-center" style="outline: none; border: none; background-color: #fff; color: #000; margin-left: 50%;">View Application Frontend</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @auth
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('countries.index')}}" class="text-decoration-none">
                                    <i class="fas fa-globe-africa text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Countries</span>
                                </a>
                                <span class="text-white">{{$countries->count()}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('provinces.index')}}" class="text-decoration-none"> 
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Provinces</span>
                                </a>
                                <span class="text-white">{{$provinces->count()}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('infections.index')}}"  class="text-decoration-none">
                                    <i class="fas fa-viruses text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Infections</span>
                                </a>
                                <span class="text-white">{{$infections->sum('infections')}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('deaths.index')}}"  class="text-decoration-none">
                                    <i class="fas fa-skull-crossbones text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Deaths</span>
                                </a>
                                <span class="text-white">{{$deaths->sum('deaths')}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('recovered.index')}}"  class="text-decoration-none">
                                    <i class="fas fa-heartbeat text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Recovered</span>
                               </a>
                                <span class="text-white">{{$recovered->sum('recovered')}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('tests.index')}}"  class="text-decoration-none">
                                    <i class="fas fa-notes-medical text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Tests Conducted</span>

                                </a>
                                <span class="text-white">{{$requestAmbulances->count()}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('quarantine.index')}}" class="text-decoration-none">
                                    <i class="fas fa-clinic-medical text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Isolation Centres</span>
                                </a>
                                <span class="text-white">{{$requestAmbulances->count()}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('survey.index')}}" class="text-decoration-none">
                                    <i class="fas fa-poll text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Survey</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('donor-type.index')}}" class="text-decoration-none">
                                    <i class="fas fa-hand-holding-medical text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Donor Types</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('donor-name.index')}}" class="text-decoration-none">
                                    <i class="fas fa-hand-holding-usd text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Donor Name</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('focus-area.index')}}" class="text-decoration-none">
                                    <i class="fas fa-users text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Focus Area</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('pledge.index')}}" class="text-decoration-none">
                                    <i class="fas fa-money-check-alt text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Pledges</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{route('recieved.index')}}" class="text-decoration-none">
                                    <i class="fas fa-funnel-dollar text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Recieved Amount</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{ route('products.index') }}" class="text-decoration-none">
                                    <i class="fas fa-users text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Products</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary border-white">
                                <a href="{{ route('spent.index') }}" class="text-decoration-none">
                                    <i class="fas fa-users text-white"></i>
                                    <span class="text-white text-decoration-none text-uppercase">Amount Spent</span>
                                </a>
                                <span class="text-white"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        @if(Session::has('success'))
                            <div class="alert alert-primary" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif

                         @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('error')}}
                            </div>
                        @endif

                        @yield('content')
                    </div>
                </div>
            </div>
            @else
                @yield('content')
            @endauth
           
        </main>
    </div>
    <script src="https://kit.fontawesome.com/661021e154.js" crossorigin="anonymous"></script>
</body>
</html>

@endif

@endif

