@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($pledge) ? 'Update Pledges' : 'Add Pledges' }}</div>
	<div class="card-body">
		<form action="{{isset($pledge) ? route('pledge.update', $pledge->id) : route('pledge.store') }}" method="post">
			@csrf
			@if(isset($pledge))
				@method('PUT')
			@endif
			<div class="row">
				<div class="col">
					<label for="donor_name_id">Donor Name</label>
					<select id="donor_name_id" name="donor_name_id" class="custom-select @error('donor_name_id') is-invalid @enderror">
						<option selected disabled value="">Choose...</option>
						@foreach($donornames as $donor)
						<option value="{{$donor->id}}">{{$donor->name}}</option>
						@endforeach
					</select>

					@error('donor_name_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
				</div>
				<div class="col">
					<label for="amount">Amount Pledged</label>
					<input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" value="{{isset($pledge) ? $pledge->amount : '' }}">

					@error('amount')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
				</div>	
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success">{{ isset($pledge) ? 'Update Pledges' : 'Add Pledge' }}</button>
			</div>
		</form>
	</div>	
</div>

@endsection