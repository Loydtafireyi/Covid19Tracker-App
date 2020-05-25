@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">Add Tests</div>
	<div class="card-body border-primary">
		<form action="{{ route('tests.store') }}" method="post">
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
					<label for="tests_date">Date Tested</label>
					<input type="date" name="tests_date" id="tests_date" class="form-control is-valid" value="">
					<div class="valid-feedback">
						Valid Date
					</div>
				</div>
				<div class="col">
					<label for="tests">Tests Conducted</label>
					<input type="number" name="tests" id="tests" class="form-control" value="">
				</div>
				
			</div>
			<div class="form-group mt-3 mb-0">
					<button type="submit" class="btn btn-success">Add Tests</button>
			</div>
		</form>
	</div>
</div>

@endsection