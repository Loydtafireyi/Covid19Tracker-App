@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($user) ? 'Update User' : 'Add User' }}</div>
	<div class="card-body">
		<form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="post">
			@csrf
			@if(isset($user))
				@method('PUT')
			@endif
				<div class="col">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" value="{{ isset($user) ? $user->name : '' }}">
					@error('name')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>
				<div class="col">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control" value="{{ isset($user) ? $user->email : '' }}">
					@error('email')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>
				<div class="col">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" value="{{ isset($user) ? $user->password : '' }}">
					@error('password')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>
				<div class="col">
					<label for="admin">admin</label>
					<input type="number" name="admin" id="admin" class="form-control" value="{{ isset($user) ? $user->admin : '' }}">
					@error('admin')
						<div class="alert alert-danger mt-1" role="alert">
							<strong>{{ $message }}</strong>
					@endif
				</div>
				<div class="form-group ml-3 mt-3 mb-0">
					<button class="btn btn-success" type="submit">{{ isset($user) ? 'Update Country' : 'Add Country' }}</button>
				</div>
		</form>
	</div>
</div>

@endsection