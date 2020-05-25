@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($survey) ? 'Update Survey' : 'Create Survey' }}</div>
	<div class="card-body">
		<form action="{{ isset($survey) ? route('survey.update', $survey->id) : route('survey.store') }}" method="post">
			@csrf
			@if(isset($survey))
				@method('PUT')
			@endif
			<div class="row">
				<div class="col">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ isset($survey) ? $survey->name : '' }}">
				</div>
				<div class="col">
					<label for="description">Description</label>
					<textarea name="description" id="description" class="form-control" placeholder="Survey description">{{ isset($survey) ? $survey->description : '' }}</textarea>
				</div>
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success">Add Survey</button>
			</div>
		</form>
	</div>
</div>
	
@endsection