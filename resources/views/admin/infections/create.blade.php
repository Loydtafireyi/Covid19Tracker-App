@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{isset($infection) ? 'Update Infection' : 'Add An Infection'}}</div>
	<div class="card-body">
		<form action="{{isset($infection) ? route('infections.update', $infection->id) : route('infections.store') }}" method="POST">
			@csrf
			@if(isset($infection))
				@method('PUT')
			@endif
			<div class="form-group">
				<label for="province_id">Province</label>
				<select name="province_id" id="province_id" class="form-control">
					<option>Select...</option>
					@foreach($provinces as $province)
						<option value="{{$province->id}}">{{$province->name}}</option>
					@endforeach

					@error('province_id')
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span>{{$message}}</span>
					@enderror
				</select>
			</div>
			<div class="form-group">
				<label for="date_reported">Reported Date</label>
				<input type="date" name="date_reported" id="date_reported" class="form-control @error('date_reported') is-invalid @enderror" value="{{isset($infection) ? $infection->date_reported : '' }}">

				@error('date_reported')
					<div class="alert alert-danger mt-1" role="alert"></div>
					<span>{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="infections">Number Of Infections</label>
				<input type="number" name="infections" id="infections" class="form-control @error('infections') is-invalid @enderror" value="{{isset($infection) ? $infection->infections : '' }}">

				@error('infections')
					<div class="alert alert-danger mt-1" role="alert"></div>
					<span>{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				<button type="submit" class="btn {{isset($infection) ? 'btn-danger' : 'btn-success'}}">{{isset($infection) ? 'Update Infection' : 'Save Infection'}}</button>
			</div>			
		</form>
	</div>
</div>

@endsection