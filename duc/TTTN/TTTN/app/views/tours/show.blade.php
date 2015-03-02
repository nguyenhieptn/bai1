@extends('adindex')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <h1>Hiển Thị Tour</h1></h3>
		</div>
		<p>{{ link_to_route('tours.index', 'Return to all tours') }}</p>

		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>Tentour</th>
				<th>Chitietngan</th>
				<th>Chitietdai</th>
				<th>Images</th>
				<th>Gia</th>
			</tr>
			</thead>

			<tbody>
			<tr>
				<td width="10px">{{{ $tour->tentour }}}</td>
				<td width="20px">{{{ $tour->chitietngan }}}</td>
				<td width="150px">{{{ $tour->chitietdai }}}</td>
				<td width="10px">{{{ $tour->images }}}</td>
				<td width="10px">{{{ $tour->gia }}}</td>

			</tr>
			</tbody>
		</table>

		<div class="panel-body">



@stop
