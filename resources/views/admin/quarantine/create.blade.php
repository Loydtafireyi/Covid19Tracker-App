@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">Quarantine/Isolation Camps</div>
	<div class="card-body border-primary">
		<form action="{{ route('quarantine.store') }}" method="post">
			@csrf

			<div class="row">
				<div class="col">
					<label for="province_id">Province</label>
					<select class="custom-select" id="province_id" name="province_id">
						<option selected disabled value="">Choose...</option>
						@foreach($provinces as $province)
						<option value="{{ $province->id }}">{{ $province->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="quarantine_centre">Date Tested</label>
					<input type="text" name="quarantine_centre" id="quarantine_centre" class="form-control is-valid" value="">
					<div class="valid-feedback">
						Valid Center
					</div>
				</div>
				
				</div>
				<div class="form-group mt-3 mb-0">
						<button type="submit" class="btn btn-success">Add Centre</button>
				</div>

		</form>
	</div>
</div>

@endsection