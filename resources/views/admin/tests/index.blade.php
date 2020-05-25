@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<a href="{{ route('home') }}" class="text-decoration-none mr-3"><li class="breadcrumb-item">Home</li></a>
		<li class="breadcrumb-item active">Tests</li>
	</ol>
</nav>

<div class="card">
	<div class="card-header">
		<span class="text-uppercase">List of tests</span>
		<a class="btn btn-dark btn-md float-right" href="{{route('tests.create')}}">Add tests</a>
	</div>
	<div class="card-body">
		<table class="table table-hover table-dark table-bordered m-0">
			<thead>
				<th>Province</th>
				<th>Tests</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($tests as $test)
				<tr>
					<td>{{$test->province->name}}</td>
					<td>{{$test->tests}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{route('tests.edit', $test->id)}}">Edit</a>
					</td>
					<td>
						<form action="{{route('tests.destroy', $test->id)}}" method="POST">
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
			{{ $tests->links() }}
		</div>
	</div>
</div>

@endsection