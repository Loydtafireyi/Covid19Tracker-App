@extends('layouts.frontend')

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
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                     @foreach($quarantines as $centres)
                                    <tr>
                                        <th><span class="co-name">{{ $centres->province->name }}</span></th>
                                        <td>{{ $centres->quarantine_centre }}</td>
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