@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($focusarea) ? 'Update Focus Area' : 'Add Focus Area' }}</div>
	<div class="card-body">
		<form action="{{ isset($focusarea) ? route('focus-area.update', $focusarea->id) : route('focus-area.store') }}" method="post">
			@csrf
			@if(isset($focusarea))
				@method('PUT')
			@endif
				<div class="col">
					<label for="name">Focus Area</label>
					<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($focusarea) ? $focusarea->name : '' }}">

					@error('name')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
				</div>
				<div class="form-group ml-3 mt-3 mb-0">
					<button class="btn btn-success" type="submit">{{ isset($focusarea) ? 'Update Focus Area' : 'Add Focus Area' }}</button>
				</div>
		</form>
	</div>
</div>

@endsection