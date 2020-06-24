@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($spent) ? 'Update Ampunt Spent' : 'Add Ampunt Spent' }}</div>
	<div class="card-body">
		<form action="{{ isset($spent) ? route('spent.update', $spent->id) : route('spent.store') }}" method="POST">
			@csrf
			@if(isset($spent))
				@method('PUT')
			@endif
			<div class="form-group">
				<label for="focus_area_id">Foucus Area</label>
				
				<select id="focus_area_id" name="focus_area_id" class="custom-select @error('focus_area_id') is-invalid @enderror">
					<option selected disabled value="">Choose...</option>
					@foreach($focusAreas as $focus)
						<option value="{{$focus->id}}">{{$focus->name}}</option>
					@endforeach
					@error('focus_area_id')
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span>{{$message}}</span>
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="product_id">Product Name</label>
				
				<select id="product_id" name="product_id" class="custom-select @error('product_id') is-invalid @enderror">
					<option selected disabled value="">Choose...</option>
					@foreach($products as $product)
						<option value="{{$product->id}}">{{$product->name}}</option>
					@endforeach
					@error('product_id')
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span>{{$message}}</span>
					@endif
				</select>
			</div>
	
			<div class="form-group">
				<label for="spent">Province spent</label>
				<input type="text" name="spent" id="spent" class="form-control @error('spent') is-invalid @enderror" value="{{isset($spent) ? $spent->spent : '' }}">

				@error('spent')
					<div class="alert alert-danger mt-1" role="alert"></div>
					<span>{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				<button type="submit" class="btn {{isset($spent) ? 'btn-danger' : 'btn-success' }}">{{isset($spent) ? 'Update Amount Spent' : 'Add Amount Spent' }}</button>
			</div>
			
		</form>
	</div>
</div>

@endsection