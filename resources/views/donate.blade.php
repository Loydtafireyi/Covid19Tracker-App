@extends('layouts.frontend')

@section('page_title')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Zimbabwe</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Covid19</a></li>
                    <li class="breadcrumb-item active">Donations</li>
                </ol>
            </div>
            <h4 class="page-title">DONATE TOWARDS COVID19</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
@endsection

@section('content')

@if(Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{Session::get('success')}}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 header-title">Select Payment Method</h4>
                    <p class="text-muted font-14">
                        Select amount you wish to donate torwards the fight against COVID 19 pandemic or enter custom amount. Kindly pay special attention to payment method.
                    </p>
                <div class="col-md-12">

                    <div class="button-list">
                        <button type="button"
                            class="btn btn-danger btn-rounded width-md waves-effect waves-light">$10</button>
                        <button type="button"
                            class="btn btn-danger btn-rounded width-md waves-effect waves-light">$25</button>
                        <button type="button"
                            class="btn btn-danger btn-rounded width-md waves-effect waves-light">$50</button>
                        <button type="button"
                            class="btn btn-danger btn-rounded width-md waves-effect waves-light">$100</button>
                        <button type="button"
                            class="btn btn-danger btn-rounded width-md waves-effect waves-light">$250</button>
                    </div>
                    <br>
                    
                    <form action="{{ route('paynow') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="amount" class="col-form-label">Enter Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}" placeholder="Amount eg 100">

                            @error('amount')
                                <br>
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                         <div class="form-group col-md-4">
                            <label for="payment_method" class="col-form-label">Payment Method</label>
                            <select class="custom-select" id="payment_method" name="payment_method">
                                <option selected>Select Payment Method</option>
                                <option value="1">PayPal</option>
                                <option value="2">RTGS/ZWL</option>
                            </select>

                             @error('payment_method')
                                <br>
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="focus_area" class="col-form-label">Where would you like your donation to go?</label>
                            <select class="custom-select" id="focus_area" name="focus_area">
                                <option selected>Select Focus Area</option>
                                @foreach($focus_areas as $area)
                                	<option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>

                             @error('focus_area')
                                <br>
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end row -->

<!-- Form row -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Your Information</h4>
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">

                        @error('email')
                            <br>
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="form-group col-md-6">
                        <label for="phone" class="col-form-label">Phone Number</label>
                        <input type="number" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="263783044087">

                        @error('phone')
                            <br>
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="address1" class="col-form-label">Address 2</label>
                    <input type="text" class="form-control" id="address1" name="address1" value="{{ old('address1') }}" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country" class="col-form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">

                         @error('country')
                            <br>
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="province_id" class="col-form-label">State/Province</label>
                        <select id="province_id" name="province_id" class="form-control">
                                <option>Choose</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                        </select>

                         @error('province_id')
                            <br>
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zip" class="col-form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip" name="zip" value="{{ old('zip') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkmeout">
                        <label class="custom-control-label" for="checkmeout"> I want to be updated about
                            COVID 19 Updates</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Donate Now</button>
            </form>
        </div>
    </div>
</div>
<!-- end row -->

</div> <!-- end container -->
</div>
<!-- end wrapper -->

@endsection