@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Ambulance</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">Ambulance Requests {{$requestAmbulances->count()}}</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('RequestAmbulance.create')}}">Request Ambulance</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Name</th>
				<th>Province</th>
				<th>Address</th>
				<th>Priority</th>
				<th>Assitsed</th>
			</thead>
			<tbody>
				@foreach($requestAmbulances as $ambulance)
				<tr>
					<td>{{$ambulance->user->name}}</td>
					<td>{{$ambulance->province->name}}</td>
					<td>{{$ambulance->address}}</td>
					<td>{{$ambulance->priority}}</td>
					<td>
						@if(!$ambulance->assisted)
						<a class="btn btn-danger btn-sm" href="{{route('RequestAmbulance.assisted', $ambulance->id)}}">Mark As Assited</a>
						@else
						<button class="btn btn-primary btn-sm" >Assisted</button>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt-3">
			{{ $requestAmbulances->links() }}
		</div>
	</div>
</div>

@endsection