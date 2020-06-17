@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">Add Recieved Amount</div>
	<div class="card-body">
		<form action="{{ route('recieved.store') }}" method="post">
			@csrf
	
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
					<input type="number" name="amount" id="amount" class="form-control" >
				</div>	
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success">Add Recieved Amount</button>
			</div>
		</form>
	</div>	
</div>

@endsection