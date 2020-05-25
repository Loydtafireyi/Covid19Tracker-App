@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">Request Ambulance</div>
	<div class="card-body">
		<form action="{{route('RequestAmbulance.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="province_id">Province</label>
				<select name="province_id" id="province_id" class="form-control">
					@foreach($provinces as $province)
						<option value="{{$province->id}}">{{$province->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="address">Pick-Up Address</label>
				<input type="text" name="address" id="address" class="form-control">
			</div>
			<div class="form-group">
				<label for="priority">Priority</label>
				<select id="priority" name="priority" class="form-control">
					<option>Urgent</option>
					<option>High</option>
					<option>Medium</option>
					<option>Low</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Request Ambulance</button>
			</div>
		</form>
	</div>
</div>

@endsection