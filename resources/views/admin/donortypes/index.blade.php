@extends('layouts.app')

@section('content')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Donor Types</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">Donor Types</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('donor-type.create')}}">Add Donor Type</a>
	</div>
	<div class="body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($donortypes as $donor)
				<tr>
					<th>{{ $donor->type }}</th>
					<th>
						<a class="btn btn-primary btn-sm" href="{{ route('donor-type.edit', $donor->id) }}"> Edit
						</a>
					</th>
					<th>
						<form action="{{ route('donor-type.destroy', $donor->id) }}" method="post">
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