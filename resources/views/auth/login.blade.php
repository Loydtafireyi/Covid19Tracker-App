<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | Zimbabwe Covid19 Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
                                    <h4 class="text-uppercase mt-0 ml-2">Sign In</h4>
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

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="email">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email"  value="{{ old('email') }}"  placeholder="Enter your email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                                 <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        @if (Route::has('password.request'))
                                        <p> <a href="{{ route('password.request') }}" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>Forgot your password?</a></p>
                                        @endif
                                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

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
        
    </body>
</html>