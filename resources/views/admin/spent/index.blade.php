@extends('layouts.app');

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Spent</li>
	</ol>
</nav>

<div class="card mb-0">
	<div class="card-header">
	<span class="text-uppercase">List Of Spendings</span>
	<a class="btn btn-dark btn-md float-right" href="{{route('spent.create')}}">Add Spent</a>
</div>
	<div class="card-body mb-0">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Foucus Area</th>
				<th>Product/Expense Name</th>
				<th>Amount Spent</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($spent as $used)
				<tr>
					<td>{{$used->focusarea->name}}</td>
					<td>{{$used->product->name}}</td>
					<td>{{$used->spent}}</td>
					<td>
						<a href="{{route('spent.edit', $used->id)}}" class="btn btn-primary btn-sm">Edit</a>
					</td>
					<td>
						<form action="{{route('spent.destroy', $used->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt-3">
			{{ $spent->links() }}
		</div>
	</div>
</div>



@endsection