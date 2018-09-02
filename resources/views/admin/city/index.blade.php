@extends('layouts.temp')
@section('content')

<table class="table stripped">
	<thead>
		<th>ID</th>
		<th>City Name</th>
		<th>State</th>

	</thead>
	<tbody>
		@foreach($cities as $city)
		<tr>
		<td>{{$city->id}}</td>
		<td>{{$city->name}}</td>
		<td>{{$city->state}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection