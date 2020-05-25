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
					@foreach($provinces as $province)
						<option value="{{$province->id}}">{{$province->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="region_code">Region Code</label>
				<input type="text" name="region_code" id="region_code" class="form-control" value="{{isset($infection) ? $infection->region_code : '' }}">
			</div>
			<div class="form-group">
				<label for="date_reported">Reported Date</label>
				<input type="date" name="date_reported" id="date_reported" class="form-control" value="{{isset($infection) ? $infection->date_reported : '' }}">
			</div>
			<div class="form-group">
				<label for="infections">Number Of Infections</label>
				<input type="number" name="infections" id="infections" class="form-control" value="{{isset($infection) ? $infection->infections : '' }}">
			</div>
			<div class="form-group">
				<button type="submit" class="btn {{isset($infection) ? 'btn-danger' : 'btn-success'}}">{{isset($infection) ? 'Update Infection' : 'Save Infection'}}</button>
			</div>			
		</form>
	</div>
</div>

@endsection