@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">Pay</div>
	<div class="card-body">
		<form action="{{route('paynow')}}" method="get">
			@csrf
			<input type="" name="">
			<button type="submit">Pay</button>
		</form>
	</div>
</div>

@endsection