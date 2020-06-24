@extends('layouts.frontend')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="text-center">
                        <h3>COVID-19 & Fund Tracker</h3>
                        <p class="text-muted"> This Tracker was made by Eloquent Geeks & BLCK Creative Studios in a collaborative effort to efficiently report COVID 19 information in real time and to provide transparency in COVID 19 Fund Tracking and Allocation Breakdown. We the undersigned,
                            acknowledge all efforts so far in responding to the COVID-19 pandemic
                            and the steps taken to publish reports.
                        </p>
                        <br>
                        <h3>Get In Touch</h3>
                        <p class="text-muted font-13 mb-3">
                            We are a multidisciplinary creative studio.
                            We work together to design, create and produce work that we are proud of for
                            what we believe in. We are available for hire in a wide range of
                            creative disciplines for a variety of jobs, projects and campaigns.
                            </p>

                            <div class="text-left">
                                <p class="text-muted font-13"><strong>Contact Name :</strong> <span
                                        class="ml-2">Loyd </span></p>

                                <p class="text-muted font-13"><strong>Mobile :</strong><span
                                        class="ml-2">+263 78 304 4087 / +263 78 372 5899</span></p>

                                <p class="text-muted font-13"><strong>Email :</strong> <span
                                        class="ml-2">hello@blckmedia.co.zw</span></p>

                                <p class="text-muted font-13"><strong>Location :</strong> <span
                                        class="ml-2">35 Greendale Ave, Greeandale, Harare</span></p>

                        <a href="{{ env('WHATSAPP') }}" target="_blank" 
                            class="btn btn-success waves-effect waves-light mt-1">Message us your
                            question</a>
                        <button type="button" class="btn btn-primary waves-effect waves-light mt-1">Send
                            us a tweet</button>
                        </div>
                </div><!-- end col -->
            </div><!-- end row -->

            
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div><!-- end col -->
</div>
<!-- end row -->

@endsection