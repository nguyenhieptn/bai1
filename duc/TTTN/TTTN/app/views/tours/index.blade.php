@extends('adindex')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <h1>Quản lý Tour Du Lịch</h1></h3>
		</div>
		<div class="panel-body">
			<p>{{ link_to_route('tours.create', 'Thêm Mới Tour') }}</p>

			@if ($tours->count())
				<table class="table table-striped table-bordered" >
					<thead>
					<tr>
						<th>Tên Tour</th>
						<th>Chi Tiết Ngắn</th>
						<th>Chi Tiết Dài</th>
						<th>Ảnh</th>
						<th>Giá</th>
					</tr>
					</thead>

					<tbody>
					@foreach ($tours as $tour)
						<tr>
							<td>{{{ $tour->tentour }}}</td>
							<td>{{{ $tour->chitietngan }}}</td>
							<td>{{{ $tour->chitietdai }}}</td>
							<td>{{{ $tour->images }}}</td>
							<td>{{{ $tour->gia }}}</td>
							<td>{{ link_to_route('tours.edit', 'Sửa', array($tour->id), array('class' => 'btn btn-info')) }}</td>
							<td>
								{{ Form::open(array('method' => 'Xóa', 'route' => array('tours.destroy', $tour->id))) }}
								{{ Form::submit('Xóa', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			@else
				Không có tour nào
			@endif

		</div>
	</div>



@stop
