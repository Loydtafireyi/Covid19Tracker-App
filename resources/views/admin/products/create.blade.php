@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($product) ? 'Update Product' : 'Add Product' }}</div>
	<div class="card-body">
		<form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="post">
			@csrf
			@if(isset($product))
				@method('PUT')
			@endif
				<div class="col">
					<label for="name">Product To Spend On</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ isset($product) ? $product->name : '' }}">
					
					@error('name')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>

				<div class="col">
					<label for="quantity">Quantity</label>
					<input type="number" name="quantity" id="quantity" class="form-control" value="{{ isset($product) ? $product->quantity : '' }}">

					@error('quantity')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>
				<div class="form-group ml-3 mt-3 mb-0">
					<button class="btn btn-success" type="submit">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
				</div>
		</form>
	</div>
</div>

@endsection