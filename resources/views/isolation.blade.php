@extends('layouts.frontend')

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
                            
                            <h4 class="page-title">Isolation & Quarantine Centres</h4>

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped table-bordered mb-0 table-hover">
                                    <thead class="bg-primary text-white text-center">
                                    <tr>
                                        <th>Province</th>
                                        <th data-priority="1">Isolation/Quarantine Centre</th>
                                        <th data-priority="2">Toll Free</th>
                                        <th data-priority="3">General Numbers</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                     @foreach($quarantines as $centres)
                                    <tr>
                                        <th><span class="co-name">{{ $centres->province->name }}</span></th>
                                        <td>{{ $centres->quarantine_centre }}</td>
                                        <td>{{ $centres->tollfree }}</td>
                                        <td>{{ $centres->telephone }}</td>
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