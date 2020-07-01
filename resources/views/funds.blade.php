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

            <h4 class="header-title mt-0 mb-3">Honoured Pledges</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-success badge-pill float-left mt-3">
                        @if($pledges->sum('amount') > 0)
                            {{ number_format($recieved->sum('amount') / $pledges->sum('amount') * 100, 2) }}
                        @endif
                        % <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US${{ $recieved->sum('amount') }} </h2>
                    <p class="text-muted mb-3">Honoured To Date</p>
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

            <h4 class="header-title mt-0 mb-4">Amount Spent</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                        data-bgColor="#FFE6BA" 
                        value=" @if($recieved->sum('amount') > 0)
                                    {{ number_format($spent->sum('spent') / $recieved->sum('amount') * 100, 2) }}
                                @endif"
                        data-skin="tron" data-angleOffset="180"
                        data-readOnly=true data-thickness=".15" />
                </div>
                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1" style="font-size: 17px !important;">
                    US$ {{ $spent->sum('spent') }}
                     </h2>
                    <p class="text-muted mb-1">Spent To Date</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-3">Amount Left</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-pink badge-pill float-left mt-3">
                        @if($recieved->sum('amount') > 0)
                            {{ number_format($spent->sum('spent') / $recieved->sum('amount') * 100, 2) }}
                        @endif
                        % <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$ {{ $recieved->sum('amount') - $spent->sum('spent') }} </h2>
                    <p class="text-muted mb-3">Current Amount</p>
                </div>
                <div class="progress progress-bar-alt-pink progress-sm">
                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100" style="width: 50.7%;">
                        <span class="sr-only">
                        @if($recieved->sum('received') > 0)
                            {{ $spent->sum('spent') / $recieved->sum('recieved') * 100 }}
                        @endif
                        % Complete</span>
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

            <h4 class="header-title mt-0 mb-4">Pledged</h4>

            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-left" dir="ltr">
                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                        data-bgColor="#F9B9B9" value="100" data-skin="tron" data-angleOffset="180"
                        data-readOnly=true data-thickness=".15" />
                </div>

                <div class="widget-detail-1 text-right">
                    <h2 class="font-weight-normal pt-2 mb-1" style="font-size: 17px !important;"> US$ {{ $weekPledge->sum('amount')}}</h2>
                    <p class="text-muted mb-1">Pledged This Week</p>
                </div>
            </div>
        </div>

    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-3">Honoured Pledges</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-success badge-pill float-left mt-3">
                        @if($weekPledge->sum('amount') > 0)
                            {{ number_format($weekRecieved->sum('amount') / $weekPledge->sum('amount') * 100, 2) }}
                        @endif
                        % <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$ {{$weekRecieved->sum('amount')}}</h2>
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

            <h4 class="header-title mt-0 mb-3">Spent This Week</h4>

            <div class="widget-box-2">
                <div class="widget-detail-2 text-right">
                    <span class="badge badge-pink badge-pill float-left mt-3">
                        @if($weekRecieved->sum('amount') > 0)
                            {{ $weekSpent->sum('spent') / $weekRecieved->sum('amount') * 100 }}
                        @endif
                        % <i
                            class="mdi mdi-trending-up"></i> </span>
                    <h2 class="font-weight-normal mb-1" style="font-size: 17px !important;"> US$ {{$weekSpent->sum('spent')}} </h2>
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
                data-angleOffset=-125 data-angleArc=250 value="
                @if($weekRecieved->count() >0)
                    {{ $weekSpent->sum('spent') / $weekRecieved->sum('amount') }}
                @else
                    3
                @endif
                " />
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

            <h4 class="header-title mt-0 mb-3">Our Covid19 Donor Locations </h4>

            <div id="world-map-markers" style="height: 420px"></div>
        </div>
    </div><!-- end col -->


    <div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <h4 class="m-t-0 header-title mb-4">Response To Date</h4>

                <div class="row icons-list-demo">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-account-heart-outline"></i> 2 Million Masks
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-24px mdi-account"></i> 60 000 Gowns
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-heart-pulse"></i> 20 Ventilators
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-home-group"></i> 5 Hospital Tents
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-airplane-takeoff"></i> 2 Tones PPE & Medical Supplies
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-charity"></i> 5 million Livelihood Cash Assistance
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-shield-home-outline"></i> Test Center Furnishing
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-bank-transfer"></i> 10 Million Business Continuity
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-text-to-speech"></i> 3 Million Media & Communication
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-teach"></i> 2 Million Education Stimulus
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-food-apple-outline"></i> 8 Million Nutrition
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <i class="mdi mdi-shield-check-outline"></i><i class="mdi mdi-account-group"></i> 1.2 Million
                        Security & Public Protection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<!-- Table start -->
 <div class="col-xl-12">
	<div class="card-box">

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
                    <th>Progress</th>
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
                        <td><span class="badge badge-success">{{ $donor->donor_type->type }}</span>
                        </td>
                        <td>
                            <span data-plugin="peity-pie" data-colors="#71b6f9,#3b4452" data-width="30" data-height="30">226,134</span>
                        </td>
                    </tr>
                    @endforeach

	            </tbody>
	        </table>

            <div class="dataTables_paginate paging_simple_numbers ml-5" id="datatable-buttons_paginate">{{ $donorname->links() }}</div>
            
	    </div>
	</div>
</div><!-- end col -->

</div>
<!-- end row --> 


</div>


@endsection

@section('scripts')
<!-- jquery knob -->
<script src="{{ asset('frontend/libs/jquery-knob/jquery.knob.min.js') }} "></script>
<!-- Sparkline charts -->
<script src="{{ asset('frontend/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
<script src="{{ asset('frontend/js/pages/charts-other.init.js') }} "></script>
<!-- peity charts -->
<script src="{{ asset('frontend/libs/peity/jquery.peity.min.js') }}"></script>
<!-- App js-->
<script src="{{ asset('frontend/js/app.min.js') }}"></script>
<!-- Jvector map js -->
<script src="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('frontend/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- vector map init -->
<script src="{{ asset('frontend/js/pages/jvectormap.init.js') }}"></script>

@endsection