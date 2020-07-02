@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">{{ isset($death) ? 'Update Deaths' : 'Add Deaths' }}</div>
	<div class="card-body">
		<form action="{{isset($death) ? route('deaths.update', $death->id) : route('deaths.store') }}" method="post">
			@csrf
			@if(isset($death))
				@method('PUT')
			@endif
			<div class="row">
				<div class="col">
					<label for="province_id">Province</label>
					<select id="province_id" name="province_id" class="custom-select @error('province_id') is-invalid @enderror">
						<option selected disabled value="">Choose...</option>
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
				<div class="col">
					<label for="date_reported">Date Reported</label>
					<input type="date" name="date_reported" id="date_reported" class="form-control @error('date_reported') is-invalid @enderror" value="{{isset($death) ? $death->date_reported : '' }}">

					 @error('date_reported')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="col">
					<label for="deaths">Deaths Reported</label>
					<input type="number" name="deaths" id="deaths" class="form-control @error('deaths') is-invalid @enderror" value="{{isset($death) ? $death->deaths : '' }}">

					 @error('deaths')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>	
			</div>
			<div class="form-group mt-3 mb-0">
				<button type="submit" class="btn btn-success">{{ isset($death) ? 'Update Deaths' : 'Add Deaths' }}</button>
			</div>
		</form>
	</div>	
</div>

@endsection