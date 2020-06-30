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
                <h2 class="font-weight-normal text-primary" data-plugin="counterup">303</h2>
                <h5>Total Self Tests</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-pink" data-plugin="counterup">6</h2>
                <h5>Self Positives</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-warning" data-plugin="counterup">154</h2>
                <h5>Symptomatic</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-info" data-plugin="counterup">150</h2>
                <h5>Asymptomatic</h5>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card-box">

            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                        <form class="form-horizontal" role="form">
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
                                <label class="col-sm-2  col-form-label">Have you tested positive fo the corona?</label>
                                <div class="ml-2 custom-control custom-radio">
                                    <input type="radio" id="tested" name="tested" class="custom-control-input">
                                    <label class="custom-control-label" for="tested">Yes</label>
                                </div>
                                <div class="ml-2 custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">No</label>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2  col-form-label">Are you having symptoms?</label>
                                <div class="ml-2 checkbox checkbox-primary checkbox-circle">
                                    <input id="checkbox" type="checkbox">
                                    <input id="checkb" type="checkbox">
                                    <label for="checkbox-9">
                                        No
                                    </label>
                                </div>
                                <div class="ml-2 checkbox checkbox-danger checkbox-circle">
                                    <input id="symptoms" name="symptoms" type="checkbox">
                                    <label for="symptoms">
                                        Yes
                                    </label>
                                </div>
                            </div>

                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                <label for="inlineRadio1"> Inline One </label>
                            </div>

                                <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="simpleinput">Additional Info</label>
                                <div class="col-sm-10">
                                    <input type="text" id="simpleinput" class="form-control" placeholder="Optional extra infomation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2  col-form-label" for="example-email">Ready?</label>
                                <button type="button" class="ml-2 btn btn-info waves-effect width-md waves-light">Submit</button>
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