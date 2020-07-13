@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Infections</li>
	</ol>
</nav>

<div class="card mb-3">
	<div class="card-body">
		<form action="{{ route('import-infections') }}" method="post"  enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="form-group">
					<label>Upload Cases Excel/CSV Sheet</label>
					<input type="file" name="file" id="file" class="form-control @error('date_reported') is-invalid @enderror">

					@error('file')
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span>{{$message}}</span>
					@enderror
				</div>
				<div class="form-group mt-4 ml-5">
					<button type="submit" class="btn btn-primary">Upload Excel File</button>
				</div>
			</div>
		</form>	
	</div>
</div>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">List of Infections</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('infections.create')}}">Add Infections</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Reported Date</th>
				<th>Infections</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($infections as $infection)
				<tr>
					<td>{{$infection->province->name}}</td>
					<td>{{$infection->date_reported}}</td>
					<td>{{$infection->infections}}</td>
					<td>{{$infection->region_code}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('infections.edit', $infection->id)}}">Edit</a>
					</td>
					<td>
						<form action="{{route('infections.destroy', $infection->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt-3">
			{{ $infections->links() }}
		</div>
	</div>
</div>

@endsection