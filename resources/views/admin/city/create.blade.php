@extends('layouts.temp')

@section('content')

<form method="post" action="{{route('cities.store')}}">
@csrf
	<div class="form-group">
		<label>City Name</label>
		<input class="form-control" placeholder="City Name" name="city_name">
	</div>

	<!-- <div class="form-group">
		<label>State</label>
		<input class="form-control" placeholder="State" type="text"name="city_state">
	</div>
 -->
	<div class="form-group">
	<label>State</label>
		<select class="form-group" name="city_state">
			@foreach($states as $state)
			<option class="form-group" value="{{$state->id}}" >{{$state->name}}</option>
			@endforeach

		</select>
	</div>

	<div class="form-group">
		<input class=" btn btn-primary" placeholder="City Name" value="Add" type="submit">
	</div>


</form>

@endsection