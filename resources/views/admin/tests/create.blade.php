@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">{{ isset($test) ? 'Update Test' : 'Add Tests' }}</div>
	<div class="card-body border-primary">
		<form action="{{ isset($test) ? route('tests.update', $test->id) : route('tests.store') }}" method="post">
			@csrf
			@if(isset($test))
				@method('PATCH')
			@endif
			<div class="row">
				<div class="col">
					<label for="province_id">Province</label>
					<select class="custom-select @error('province_id') is-invalid @enderror" id="province_id" name="province_id">
						<option selected disabled value="">Choose...</option>
						@foreach($provinces as $province)
						<option value="{{ $province->id }}">{{ $province->name }}</option>
						@endforeach
					</select>

					@error('province_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="col">
					<label for="tests_date">Date Tested</label>
					<input type="date" name="tests_date" id="tests_date" class="form-control @error('tests_date') is-invalid @enderror" value="{{ isset($test) ? $test->tests_date : '' }}">

					@error('tests_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="col">
					<label for="tests">Tests Conducted</label>
					<input type="number" name="tests" id="tests" class="form-control @error('tests') is-invalid @enderror" value="{{ isset($test) ? $test->tests : '' }}">

					@error('tests')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				
			</div>
			<div class="form-group mt-3 mb-0">
					<button type="submit" class="btn btn-success">{{ isset($test) ? 'Update Test' : 'Add Tests' }}</button>
			</div>
		</form>
	</div>
</div>

@endsection