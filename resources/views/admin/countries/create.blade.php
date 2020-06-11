@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($country) ? 'Update Country' : 'Add Country' }}</div>
	<div class="card-body">
		<form action="{{ isset($country) ? route('countries.update', $country->id) : route('countries.store') }}" method="post">
			@csrf
			@if(isset($country))
				@method('PUT')
			@endif
				<div class="col">
					<label for="country">Country</label>
					<input type="text" name="country" id="country" class="form-control" value="{{ isset($country) ? $country->country : '' }}">
				</div>
				<div class="form-group ml-3 mt-3 mb-0">
					<button class="btn btn-success" type="submit">{{ isset($country) ? 'Update Country' : 'Add Country' }}</button>
				</div>
		</form>
	</div>
</div>

@endsection