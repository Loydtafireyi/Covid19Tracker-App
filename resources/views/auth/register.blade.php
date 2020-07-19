<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | Zimbabwe Covid19 Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Zimbabwe Covid19 online tracker. Deaths {{ $deaths->sum('deaths') }}, Infected {{ $infections->sum('infections') }}, Recovered {{ $recovered->sum('recovered') }}, Tests {{ $tests->sum('tests') }} . Track local COVID-19 with active, recoveries and death rate on the map." name="description" />
        <meta name="keywords" keywords="The latest maps and charts on the spread of COVID-19 in Zimbabwe, including cases, deaths, closures and restrictions, Corona virus Zimbabwe, coronavirus death in zimbabwe, covid19 coronavirus statistics in Zimbabwe, harare covid19, Bulawayo corona virus stats, covid19 in zimbabwe by province, Live statistics and coronavirus news tracking the number of confirmed cases, recovered patients, tests, and death toll due to the COVID-19 coronavirus from Zimbabwe">
        <meta property="og:image" content="https://covid19zim.online/frontend/images/zimbabwe (1).svg">
        <meta property="og:url" content="https://covid19zim.online/">
        <meta content="Loyd" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/images/zimbabwe (1).svg') }}">

        <!-- App css -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/app.min.css') }}" rel="stylesheet" type="text/css" />


    </head>

    <body class="authentication-bg">

        <div class="home-btn d-none d-sm-block">
            <a href="/"><i class="fas fa-home h2 text-dark"></i></a>
        </div>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4 d-flex justify-content-center">
                                    <span><img src="{{ asset('frontend/images/zimbabwe (1).svg') }}" alt="Zimbabwe Covid19 Tracker" height="22"></span>
                                    <h4 class="text-uppercase mt-0 ml-2">Sign-up</h4>
                                </div>

                                <br>

                               <div class="form-group mb-0 text-center">
                                    <a href="/login/facebook" class="btn btn-primary btn-block" type="submit" style="background-color: #3b5998; outline: none; border: none; color: #fff;"><i class="fab fa-facebook-f"></i> Continue with Facebook</a>
                                </div>

                                 <br>

                                <div class="form-group mb-0 text-center">
                                    <a href="/login/google" class="btn btn-primary btn-block" type="submit" style="background-color: #db3236; outline: none; border: none; color: #fff;"><i class="fab fa-google"></i> Continue with Google</a>
                                </div>


                                <br>

                               <form method="POST" action="{{ route('register') }}">
                                    @csrf


                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Enter your name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <!-- Google Recaptcha -->
                                    <div class="form-group mb-3">
                                        <div class="g-recaptcha" 
                                            data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                        </div>

                                        @error('g-recaptcha-response')
                                        <br>
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                                 <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href="{{ route('login') }}" class="text-dark ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

         <!-- Vendor js -->
        <script src="{{ asset('frontend/js/vendor.min.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('frontend/js/app.min.js') }}"></script>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </body>
</html