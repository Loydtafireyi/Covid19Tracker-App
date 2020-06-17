@extends('layouts.frontend')

@section('css')
<!-- jvectormap -->
<link href="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Chartist Chart CSS -->
<link rel="stylesheet" href="{{ asset('frontend/libs/chartist/chartist.min.css') }}">
@endsection

@section('page_title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Zimbabwe</a></li>
                    <li class="breadcrumb-item active">Covid19 Funds Tracker</li>
                </ol>
            </div>
            <h4 class="page-title">COVID-19 FUNDS TOTAL</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
@endsection

@section('content')

<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-4">Total Pledged</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                        data-bgColor="#F9B9B9" value="100" data-skin="tron" data-angleOffset="180"
                        data-readOnly=true data-thickness=".15" />
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1" style="font-size: 17px !important;"> US${{ $pledges->sum('amount') }}</h2>
                    <p class="text-muted mb-1">Pledged To Date</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Honoured Pledges</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-success badge-pill float-left mt-3">49.3% <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US${{ $recieved->sum('amount') }} </h2>
                    <p class="text-muted mb-3">Revenue today</p>
                </div>
                <div class="progress progress-bar-alt-success progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100" style="width: 49.3%;">
                        <span class="sr-only">49.3% Complete</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-4">Amount Spent</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                        data-bgColor="#FFE6BA" value="54.2" data-skin="tron" data-angleOffset="180"
                        data-readOnly=true data-thickness=".15" />
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1" style="font-size: 17px !important;"> US$106, 045, 367 </h2>
                    <p class="text-muted mb-1">Spent to date</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Amount Left</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-pink badge-pill float-left mt-3">50.7% <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$201, 262, 171 </h2>
                    <p class="text-muted mb-3">Current Amount</p>
                </div>
                <div class="progress progress-bar-alt-pink progress-sm">
                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100" style="width: 50.7%;">
                        <span class="sr-only">50.7% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div><!-- end col -->
 
</div>
<!-- end row -->

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                
            </div>
            <h4 class="page-title">This Week</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-4">Pledged</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                        data-bgColor="#F9B9B9" value="0.11" data-skin="tron" data-angleOffset="180"
                        data-readOnly=true data-thickness=".15" />
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1" style="font-size: 17px !important;"> US$423,893</h2>
                    <p class="text-muted mb-1">Pledged This Week</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Honoured Pledges</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-success badge-pill float-left mt-3">0.002% <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$623,893 </h2>
                    <p class="text-muted mb-3">Honoured This Week</p>
                </div>
                <div class="progress progress-bar-alt-success progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100" style="width: 0.002;">
                        <span class="sr-only">0.002% Complete</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end col --> 

    <div class="col-xl-3 col-md-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Spent This Week</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-pink badge-pill float-left mt-3">77% <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$333,893 </h2>
                    <p class="text-muted mb-3">Spent This Week</p>
                </div>
                <div class="progress progress-bar-alt-pink progress-sm">
                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                        <span class="sr-only">77% Complete</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-md-6 col-xl-3 text-center">
        <div class="mt-3" dir="ltr">
            <input data-plugin="knob" data-width="150" data-height="120" data-min="-100"
                data-fgColor="#35b8e0" data-bgColor="#3b4452" data-displayPrevious=true
                data-angleOffset=-125 data-angleArc=250 value="54" />
            <h5 class="text-muted">Percentage Spent for the Week</h5>
        </div>
    </div><!-- end col-->
    
          <!-- end row -->
</div>
<!-- end row -->

<!-- World map -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-header my-2 header-title">Donor Based Map</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Our Covid19 Donor Locations </h4>

            <div id="world-map-markers" style="height: 420px"></div>
        </div>
    </div><!-- end col -->


<!-- Table start -->
 <div class="col-xl-12">
	<div class="card-box">
	    <div class="dropdown float-right">
	        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
	            <i class="mdi mdi-dots-vertical"></i>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right">
	            <!-- item-->
	            <a href="javascript:void(0);" class="dropdown-item">Action</a>
	            <!-- item-->
	            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
	            <!-- item-->
	            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
	            <!-- item-->
	            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
	        </div>
	    </div>

	    <h4 class="header-title mt-0 mb-3">Sources</h4>

	    <div class="table-responsive">
	        <table class="table table-hover mb-0">
	            <thead>
	            <tr>
	                <th>#</th>
                    <th>Donor</th>
                    <th>Amount Pledged</th>
                    <th>Amount Honored</th>
                    <th>Amount Left</th>
                    <th>Donor Type</th>
	            </tr>
	            </thead>
	            <tbody>
	                @foreach($donorname as $donor)
                    <tr>
                        <td>{{ $donor->id }}</td>
                        <td>{{ $donor->name }}</td>
                        <td>{{ $donor->pledges->sum('amount') }}</td>
                        <td>{{ $donor->recieveds->sum('amount') }}</td>
                        <td>{{ $donor->pledges->sum('amount') - $donor->recieveds->sum('amount') }}</td>
                        <td><span class="badge badge-danger">{{ $donor->donor_type->type }}</span></td>
                    </tr>
                    @endforeach

	            </tbody>
	        </table>
	    </div>
	</div>
</div><!-- end col -->

</div>
<!-- end row --> 


<div class="row">
	<div class="col-xl-6">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 mb-3">Donor Analysis </h4>

            <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
        </div>
    </div><!-- end col-->

    <div class="col-xl-6">
            <div class="card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                    </div>
                </div>

                <h4 class="header-title mt-0 mb-3">Pledge Progress</h4>

                <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
            </div>
        </div><!-- end col-->
    </div>
    <!-- end row -->

</div>


@endsection

@section('scripts')
<!-- Jvector map js -->
<script src="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- vector map init -->
<script src="{{ asset('frontend/js/pages/jvectormap.init.js') }}"></script>
<!--Chartist Chart-->
<script src="{{ asset('frontend/libs/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('frontend/libs/chartist/chartist-plugin-tooltip.min.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('frontend/js/pages/chartist.init.js') }}"></script>
@endsection