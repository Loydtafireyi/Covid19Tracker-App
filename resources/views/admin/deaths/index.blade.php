@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Deaths</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">{{$deaths->sum('deaths')}} Deaths Recorded</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('deaths.create')}}">Add Deaths</a>
	</div>
	<div class="card-body">
		<table class="table table-dark table-hover table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Date Reported</th>
				<th>Deaths</th>
				<th>Edit</th>
			</thead>
			<tbody>
				@foreach($deaths as $death)
				<tr>
					<td>{{$death->province->name}}</td>
					<td>{{$death->date_reported}}</td>
					<td>{{$death->deaths}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('deaths.edit', $death->id)}}">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt-3">
			{{ $deaths->links() }}
		</div>
	</div>
</div>

@endsection