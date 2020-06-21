@extends('layouts.app')

@section('content')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Pledges</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">Pledges</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('pledge.create')}}">Add Pladge</a>
	</div>
	<div class="body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Donor Name</th>
				<th>Amount</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($pledges as $pledge)
				<tr>
					<th>{{ $pledge->donor_name->name }}</th>
					<th>{{ $pledge->amount }}</th>
					<th>
						<a class="btn btn-primary btn-sm" href="{{ route('pledge.edit', $pledge->id) }}"> Edit
						</a>
					</th>
					<th>
						<form action="{{ route('pledge.destroy', $pledge->id) }}" method="post">
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