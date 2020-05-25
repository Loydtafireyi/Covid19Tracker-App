@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Survey</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">List of Survey Centres</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('survey.create')}}">Add Survey</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Name</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($surveys as $survey)
				<tr>
					<td>{{$survey->name}}</td>
					<td>{{$survey->description}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('survey.edit', $survey->id)}}">Edit</a>
					</td>
					<td>
						<form action="{{route('survey.destroy', $survey->id)}}" method="POST">
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
			{{ $surveys->links() }}
		</div>
	</div>
</div>

@endsection