@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Isolation/Qurantine Centres</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">List of Quarantine Centres</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('quarantine.create')}}">Add Quarantine</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Reported Date</th>
				<th>Isolation Centre</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($quarantine as $isolation)
				<tr>
					<td>{{$isolation->province->name}}</td>
					<td>{{$isolation->date_reported}}</td>
					<td>{{$isolation->quarantine}}</td>
					<td>{{$isolation->region_code}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('quarantine.edit', $isolation->id)}}">Edit</a>
					</td>
					<td>
						<form action="{{route('quarantine.destroy', $isolation->id)}}" method="POST">
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
			{{ $quarantine->links() }}
		</div>
	</div>
</div>

@endsection