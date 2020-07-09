@extends('layouts.app')

@section('content')

<div class="card border-primary">
	<div class="card-header border-primary">{{isset($recover) ? 'Update Recovery' : 'Add Recovered'}}</div>
	<div class="card-body border-primary">
		<form action="{{isset($recover) ? route('recovered.update', $recover->id) : route('recovered.store')}}" method="POST">
			@csrf
			@if(isset($recover))
				@method('PATCH')
			@endif
			<div class="form-group">
				<label for="province_id">Province</label>
				<select name="province_id" id="province_id" class="form-control @error('province_id') is-invalid @enderror">
					<option selected disabled value="">Choose..</option>
					@foreach($provinces as $province)
					<option value="{{$province->id}}">{{$province->name}}</option>
					@endforeach
				</select>

				@error('province_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div class="form-group"> 
				<label for="date_reported">Date Reported</label>
				<input type="text" name="date_reported" id="" class="form-control @error('date_reported') is-invalid @enderror" value="{{isset($recover) ? $recover->date_reported : ''}}">

				@error('date_reported')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div class="form-group">
				<label for="recovered">Recovered</label>
				<input type="number" name="recovered" id="recovered" class="form-control @error('recovered') is-invalid @enderror" value="{{isset($recover) ? $recover->recovered : ''}}">

				@error('recovered')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>	
			<div class="form-group">
				<button type="submit" class="btn btn-success">{{isset($recover) ? 'Update Recovery' : 'Add Recovered'}}</button>
			</div>
		</form>
	</div>
</div>	

@endsection