@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">{{isset($recover) ? 'Update Recovery' : 'Add Recovered'}}</div>
	<div class="card-body border-primary">
		<form action="{{isset($recover) ? route('recovered.update', $recover->id) : route('recovered.store')}}" method="POST">
			@csrf
			@if(isset($recover))
				@method('PUT')
			@endif
			<div class="form-group">
				<label for="province_id">Province</label>
				<select name="province_id" id="province_id" class="form-control">
					@if(isset($recover))
					<option>{{$recover->province->name}}</option>
					@else
					<option selected disabled value="">Choose..</option>
					@endif
					@foreach($provinces as $province)
					<option value="{{$province->id}}">{{$province->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="date_reported">Date Reported</label>
				<input type="date" name="date_reported" id="date_reported" class="form-control" value="{{isset($recover) ? $recover->date_reported : ''}}">
			</div>
			<div class="form-group">
				<label for="recover">Recovered</label>
				<input type="number" name="recovered" id="recovered" class="form-control" value="{{isset($recover) ? $recover->recovered : ''}}">
			</div>	
			<div class="form-group">
				<button type="submit" class="btn btn-success">{{isset($recover) ? 'Update Recovery' : 'Add Recovered'}}</button>
			</div>
		</form>
	</div>
</div>	

@endsection