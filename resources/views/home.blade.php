@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-uppercase">Admin Dashboard</div>

    <div class="card-body">
        <table class="table table-bordered table-dark table-hover">
        	<thead class="font-weight-normal text-uppercase">
        		<th>Users</th>
        		<th>Surveys</th>
        		<th>Cases</th>
        	</thead>
        	<tbody>
        		<tr>
        			<td>{{ $user->count() }}</td>
        			<td></td>
        			<td>{{ $infections->count() }}</td>
        		</tr>
        	</tbody>
        </table>
    </div>
</div>
@endsection
