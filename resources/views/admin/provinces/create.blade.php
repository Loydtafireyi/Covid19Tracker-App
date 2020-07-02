@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{isset($province) ? 'Update Province' : 'Add Province' }}</div>
	<div class="card-body">
		<form action="{{ isset($province) ? route('provinces.update', $province->id) : route('provinces.store') }}" method="POST">
			@csrf
			@if(isset($province))
				@method('PUT')
			@endif
			<div class="form-group">
				<label for="country_id">Country</label>
				
				<select id="country_id" name="country_id" class="custom-select @error('country_id') is-invalid @enderror">
					<option selected disabled value="">Choose...</option>
					@foreach($countries as $country)
						<option value="{{$country->id}}">{{$country->country}}</option>
					@endforeach

					@error('country_id')
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span>{{$message}}</span>
					@enderror
				</select>
			</div>
			<div class="form-group">
				<label for="name">Add Province</label>
				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{isset($province) ? $province->name : '' }}">

				@error('name')
					<div class="alert alert-danger mt-1" role="alert"></div>
					<span>{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="code">Province Code</label>
				<input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" value="{{isset($province) ? $province->code : '' }}">

				@error('code')
					<div class="alert alert-danger mt-1" role="alert"></div>
					<span>{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				<button type="submit" class="btn {{isset($province) ? 'btn-danger' : 'btn-success' }}">{{isset($province) ? 'Update Province' : 'Add Province' }}</button>
			</div>
			
		</form>
	</div>
</div>

@endsection