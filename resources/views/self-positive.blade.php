@extends('layouts.frontend')

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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-email">Ready?</label>
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