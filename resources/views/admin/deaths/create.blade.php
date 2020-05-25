@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($death) ? 'Update Deaths' : 'Add Deaths' }}</div>
	<div class="card-body">
		<form action="{{isset($death) ? route('deaths.update', $death->id) : route('deaths.store') }}" method="post">
			@csrf
			@if(isset($death))
				@method('PUT')
			@endif
			<div class="row">
				<div class="col">
					<label for="province_id">Province</label>
					<select id="province_id" name="province_id" class="custom-select">
						<option selected disabled value="">Choose...</option>
						@foreach($provinces as $province)
						<option value="{{$province->id}}">{{$province->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="date_reported">Date Reported</label>
					<input type="date" name="date_reported" id="date_reported" class="form-control is-valid" value="{{isset($death) ? $death->date_reported : '' }}">
					<div class="valid-feedback">
						Valid Date
					</div>
				</div>
				<div class="col">
					<label for="deaths">Deaths Reported</label>
					<input type="number" name="deaths" id="deaths" class="form-control" value="{{isset($death) ? $death->deaths : '' }}">
				</div>	
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success">{{ isset($death) ? 'Update Deaths' : 'Add Deaths' }}</button>
			</div>
		</form>
	</div>	
</div>

@endsection