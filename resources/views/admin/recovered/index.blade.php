@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Recovered</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">{{$recovered->sum('recovered')}} Recovered</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('recovered.create')}}">Add Recovered</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Date Reported</th>
				<th>Recovered</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($recovered as $recover)
				<tr>
					<td>{{$recover->province->name}}</td>
					<td>{{ $recover->date_reported }}</td>
					<td>{{ $recover->recovered }}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('recovered.edit', $recover->id)}}">Edit</a>
					</td>
					<td>
						<form action="{{ route('recovered.destroy', $recover->id) }}">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt">
			{{ $recovered->links() }}
		</div>
	</div>
</div>

@endsection