@extends('layouts.app')

@section('content')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Products</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">products</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('products.create')}}">Add Product</a>
	</div>
	<div class="body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<th>{{ $product->name }}</th>
					<th>
						<a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}"> Edit
						</a>
					</th>
					<th>
						<form action="{{ route('products.destroy', $product->id) }}" method="post">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection