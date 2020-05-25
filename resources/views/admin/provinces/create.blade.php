@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{isset($province) ? 'Update Province' : 'Add Province' }}</div>
	<div class="card-body">
		<form action="{{ isset($province) ? route('provinces.update', $province->id) : route('provinces.store') }}" method="POST">
			@csrf
			@if(isset($province))
				@method('PUT')
			@endif
			<div class="form-group">
				<label for="name">Add Province</label>
				<input type="text" name="name" id="name" class="form-control" value="{{isset($province) ? $province->name : '' }}">
			</div>
			<div class="form-group">
				<button type="submit" class="btn {{isset($province) ? 'btn-danger' : 'btn-success' }}">{{isset($province) ? 'Update Province' : 'Add Province' }}</button>
			</div>
			
		</form>
	</div>
</div>

@endsection