@extends('layouts.app')

@section('content')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Users</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">Users</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('users.create')}}">Add Admin User</a>
	</div>
	<div class="body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<th>{{ $user->name }}</th>
					<th>{{ $user->email }}</th>
					<th>
						@if($user->admin == 1)
							is admin
						@endif
					</th>
					<th>
						<a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}"> Edit
						</a>
					</th>
					<th>
						<form action="{{ route('users.destroy', $user->id) }}" method="post">
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