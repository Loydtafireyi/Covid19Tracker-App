@extends('layouts.frontend')

@section('seo')
    <title>Zimbabwe Covid19 | Cases</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Zimbabwe Covid19 online tracker. Deaths {{ $deaths->sum('deaths') }}, Infected {{ $infections->sum('infections') }}, Recovered {{ $recovered->sum('recovered') }}, Tests {{ $tests->sum('tests') }} . Track local COVID-19 with active, recoveries and death rate on the map." name="description" />
    <meta name="keywords" keywords="The latest maps and charts on the spread of COVID-19 in Zimbabwe, including cases, deaths, closures and restrictions, Corona virus Zimbabwe, coronavirus death in zimbabwe, covid19 coronavirus statistics in Zimbabwe, harare covid19, Bulawayo corona virus stats, covid19 in zimbabwe by province, Live statistics and coronavirus news tracking the number of confirmed cases, recovered patients, tests, and death toll due to the COVID-19 coronavirus from Zimbabwe">
    <meta property="og:image" content="https://covid19zim.online/frontend/images/zimbabwe (1).svg">
    <meta property="og:url" content="https://covid19zim.online/">
    <meta content="Loyd" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
@endsection

@section('page_title')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Zimbabwe</a></li>
                    <li class="breadcrumb-item active">Covid19 Tracker</li>
                </ol>
            </div>
            <h4 class="page-title">REPORT SELF POSITIVE</h4>
        </div>
    </div>
</div>     
<!-- end page title -->

@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-primary" data-plugin="counterup">{{ $self_tests->count() }}</h2>
                <h5>Total Self Tests</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-pink" data-plugin="counterup">{{ $self_positive }}</h2>
                <h5>Self Positives</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-warning" data-plugin="counterup">{{ $symptomatic }}</h2>
                <h5>Symptomatic</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-info" data-plugin="counterup">{{ $asymptomatic }}</h2>
                <h5>Asymptomatic</h5>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@if(Session::has('success'))
    <div class="alert alert-primary font-weight-bolder" role="alert">
        {{ (Session::get('success')) }}
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card-box">

            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                        <form class="form-horizontal" action="{{ route('self-positive.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Province</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="province_id" id="province_id">

                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{ $province->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="tested">Have you tested positive fo the corona?</label>
                                 <div class="col-sm-6">
                                    <select class="form-control" name="tested" id="tested">

                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>

                                    </select>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="symptoms">Are you having symptoms?</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="symptoms" id="symptoms">

                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>

                                    </select>
                                </div>
                            </div>
                                <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="info">Additional Info</label>
                                <div class="col-sm-10">
                                    <input type="text" id="info" name="info" class="form-control" placeholder="Optional extra infomation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">

                                    @error('email')
                                        <br>
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Google Recaptcha -->
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="google_recapture">Screening Robots!</label>
                                
                                <div class="form-group">
                                    <div class="ml-2 g-recaptcha" 
                                        data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                    </div>

                                    @error('g-recaptcha-response')
                                    <br>
                                    <span class="ml-2 alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="submission">Ready?</label>
                                <button type="submit" class="ml-2 btn btn-info waves-effect width-md waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->


@endsection

@section('scripts')

<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection