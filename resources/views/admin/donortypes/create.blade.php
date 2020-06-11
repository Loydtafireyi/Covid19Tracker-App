@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($donortype) ? 'Update Donor Type' : 'Add Donor Type' }}</div>
	<div class="card-body">
		<form action="{{ isset($donortype) ? route('donor-type.update', $donortype->id) : route('donor-type.store') }}" method="post">
			@csrf
			@if(isset($donortype))
				@method('PUT')
			@endif
				<div class="col">
					<label for="type">Donor Type</label>
					<input type="text" name="type" id="type" class="form-control" value="{{ isset($donortype) ? $donortype->type : '' }}">
				</div>
				<div class="form-group ml-3 mt-3 mb-0">
					<button class="btn btn-success" type="submit">{{ isset($donortype) ? 'Update Donor Type' : 'Add Donor Type' }}</button>
				</div>
		</form>
	</div>
</div>

@endsection