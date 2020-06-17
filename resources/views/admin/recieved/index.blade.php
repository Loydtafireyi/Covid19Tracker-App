@extends('layouts.app')

@section('content')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Recieved Amount</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">Recieved Amount</span> 
		<a class="btn btn-dark btn-md float-right" href="{{route('recieved.create')}}">Add Recieved Amount</a>
	</div>
	<div class="body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Amount</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($recieved as $recieve)
				<tr>
					<th>{{ $recieve->amount }}</th>
					<th>
						<a class="btn btn-primary btn-sm" href="{{ route('recieved.edit', $recieve->id) }}"> Edit
						</a>
					</th>
					<th>
						<form action="{{ route('recieved.destroy', $recieve->id) }}" method="post">
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