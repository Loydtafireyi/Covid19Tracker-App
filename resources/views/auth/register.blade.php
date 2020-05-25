<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | Zimbabwe Covid19 Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
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
        
    </body>
</html