@extends('layouts.frontend')

@section('seo')
    <title>Zimbabwe Covid19 | Province Cases Tracker</title>
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
                    <li class="breadcrumb-item active">Covid19 Statistics</li>
                </ol>
            </div>
            <h4 class="page-title">Zimbabwe Covid19 Statistics</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
@endsection

@section('content')

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped table-bordered mb-0 table-hover">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Province</th>
                                        <th data-priority="1">Infections</th>
                                        <th data-priority="3">Recoveries</th>
                                        <th data-priority="1">Deaths</th>
                                        <th data-priority="3">Tests</th>
                                        <th data-priority="3">Isolation Centres</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($provinces as $province)
                                    <tr>
                                        <th><span class="co-name">{{ $province->name }}</span></th>
                                        <td>{{ $province->infections->sum('infections') }}</td>
                                        <td>{{ $province->recovered->sum('recovered') }}</td>
                                        <td>{{ $province->deaths->sum('deaths') }}</td>
                                        <td>{{ $province->tests->sum('tests') }}</td>
                                        <td>{{ $province->quarantines->count() }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- ============================================================== -->
<!-- End Page content -->

<!-- ============================================================== -->

@section('table-scripts')
<!-- Responsive Table js -->
<script src="{{ asset('frontend/libs/rwd-table/rwd-table.min.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('frontend/js/pages/responsive-table.init.js') }}"></script>
@stop

@endsection