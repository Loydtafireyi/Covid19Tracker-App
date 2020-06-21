@extends('layouts.app');

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Provinces</li>
	</ol>
</nav>

<div class="card mb-0">
	<div class="card-header">
	<span class="text-uppercase">List Of Provinces</span>
	<a class="btn btn-dark btn-md float-right" href="{{route('provinces.create')}}">Add Province</a>
</div>
	<div class="card-body mb-0">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Country</th>
				<th>Province Code</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($provinces as $province)
				<tr>
					<td>{{$province->name}}</td>
					<td>{{$province->country->country}}</td>
					<td>{{$province->code}}</td>
					<td>
						<a href="{{route('provinces.edit', $province->id)}}" class="btn btn-primary btn-sm">Edit</a>
					</td>
					<td>
						<form action="{{route('provinces.destroy', $province->id)}}" method="POST">
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
			{{ $provinces->links() }}
		</div>
	</div>
</div>



@endsection