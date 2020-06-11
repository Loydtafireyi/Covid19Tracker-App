@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($donorname) ? 'Update Donor' : 'Add Donor' }}</div>
	<div class="card-body">
		<form action="{{isset($donorname) ? route('donor-name.update', $donorname->id) : route('donor-name.store') }}" method="post">
			@csrf
			@if(isset($donorname))
				@method('PUT')
			@endif
			<div class="row">
				<div class="col">
					<label for="donortype_id">Donor Type</label>
					<select id="donortype_id" name="donortype_id" class="custom-select">
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
					<input type="text" name="name" id="name" class="form-control" value="{{isset($donorname) ? $donorname->name : '' }}">
				</div>	
				</div>
				<div class="form-group mt-3 mb-0">
					<button type="submit" class="btn btn-success">{{ isset($donorname) ? 'Update Donor' : 'Add Donor' }}
					</button>
				</div>
			</div>
		</form>
	</div>	
</div>

@endsection