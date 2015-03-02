@extends('adindex')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Thông Tin Vừa Chỉnh Sửa</h3>
		</div>
		<div class="panel-body">
			<p>{{ link_to_route('tintucs.index', 'Xem Tin Tức') }}</p>

			<table class="table table-striped table-bordered">
				<thead>
				<tr>
					<th>Tên Tin Tức</th>
					<th> Chi Tiết Ngắn</th>
					<th> Nội Dung</th>
					<th>Ảnh</th>
					<th>Ngày Up</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>{{{ $tintuc->tentt }}}</td>
					<td>{{{ $tintuc->chitietngan }}}</td>
					<td>{{{ $tintuc->noidung }}}</td>
					<td>{{{ $tintuc->anh }}}</td>
					<td>{{{ $tintuc->ngayup }}}</td>

				</tr>
				</tbody>
			</table>
		</div>
	</div>


@stop
