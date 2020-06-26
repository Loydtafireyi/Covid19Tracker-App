@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">Update Donor Name</div>
	<div class="card-body">
		<form action="{{ route('donor-name.update', $donorname->id) }}" method="post">
			@csrf
			@method('PATCH')
			
			<div class="row">
				<div class="col">
					<label for="donor_type_id">Donor Type</label>
					<select id="donor_type_id" name="donor_type_id" class="custom-select">
						<option selected disabled value="">Choose...</option>
						@foreach($donortypes as $donor)
						<option value="{{$donor->id}}">{{$donor->type}}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="country_id">Country</label>
					<select id="country_id" name="country_id" class="custom-select">
						<option selected disabled value="">Choose...</option>
						@foreach($countries as $country)
						<option value="{{$country->id}}">{{$country->country}}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $donorname->name}}">

					@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>	
				</div>
				<div class="form-group mt-3 mb-0">
					<button type="submit" class="btn btn-success">{{ isset($donorname) ? 'Update Donor Name' : 'Add Donor Name' }}
					</button>
				</div>
			</div>
		</form>
	</div>	
</div>

@endsection