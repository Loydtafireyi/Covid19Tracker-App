@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-uppercase">Admin Dashboard</div>

    <div class="card-body">
        <div class="row justify-content-center">
            <div class="card mt-2 bg-danger ml-3 rounded" style="width: 10rem; height: 10rem;">
                <a href="{{ route('infections.index') }}">
                    <img src="{{ asset('frontend/images/virus.svg') }}" class="card-img-top p-2" alt="...">
                </a>
            </div>

            <div class="card mt-2 bg-success ml-3 rounded" style="width: 10rem; height: 10rem;">
                <a href="">
                    <img src="{{ asset('frontend/images/survey.svg') }}" class="card-img-top p-2" alt="...">
                </a>
            </div>

            <div class="card mt-2 bg-primary ml-3 rounded" style="width: 10rem; height: 10rem;">
                <a href="{{ route('donor-name.index') }}">
                    <img src="{{ asset('frontend/images/money-bag.svg') }}" class="card-img-top p-2" alt="...">
                </a>
            </div>

            <div class="card mt-2 bg-warning ml-3 rounded" style="width: 10rem; height: 10rem;">
                <a href="">
                    <img src="{{ asset('frontend/images/settings.svg') }}" class="card-img-top p-2" alt="...">
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
