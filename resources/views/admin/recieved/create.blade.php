@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($recieved)  ? 'Edit Recieved Amount' :  'Add Recieved Amount'}}</div>
	<div class="card-body">
		<form action="{{ isset($recieved) ? route('recieved.update', $recieved->id) : route('recieved.store') }}" method="post">
			@csrf
			@if(isset($recieved))
				@method('PATCH')
			@endif
	
			<div class="row">
				<div class="col">
					<label for="donor_name_id">Donor Name</label>
					<select id="donor_name_id" name="donor_name_id" class="custom-select">
						<option selected disabled value="">Choose...</option>
						@foreach($donornames as $donor)
						<option value="{{$donor->id}}">{{$donor->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="col">
					<label for="amount">Amount Pledged</label>
					<input type="number" name="amount" id="amount" class="form-control" value="{{ isset($recieved) ? $recieved->amount : '' }}">
				</div>	
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success"> {{ isset($recieved)  ? 'Edit Recieved Amount' :  'Add Recieved Amount'}} </button>
			</div>
		</form>
	</div>	
</div>

@endsection