@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">Quarantine/Isolation Camps</div>
	<div class="card-body border-primary">
		<form action="{{ isset($quarantine) ? route('quarantine.update',$quarantine->id) : route('quarantine.store') }}" method="post">
			@csrf
			@if(isset($quarantine))
				@method('PATCH')
			@endif
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
					<label for="quarantine_centre">Centre Name</label>
					<input type="text" name="quarantine_centre" id="quarantine_centre" class="form-control" value="{{ isset($quarantine) ? $quarantine->quarantine_centre : '' }}">
				</div>
				<div class="col">
					<label for="tollfree">Tollfree Number</label>
					<input type="text" name="tollfree" id="tollfree" class="form-control" value="{{ isset($quarantine) ? $quarantine->tollfree : '' }}">
				</div>
				<div class="col">
					<label for="telephone">Telephone</label>
					<input type="text" name="telephone" id="telephone" class="form-control" value="{{ isset($quarantine) ? $quarantine->telephone : '' }}">
				</div>
				
				</div>
				<div class="form-group mt-3 mb-0">
						<button type="submit" class="btn btn-success">{{ isset($quarantine) ? 'Update Centre' : 'Add Centre'}}</button>
				</div>

		</form>
	</div>
</div>

@endsection