@extends('adindex')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý tin tức</h3>
		</div>
		<div class="panel-body">
			<p>{{ link_to_route('tintucs.create', 'Thêm Mới Tin Tức') }}</p>

			@if ($tintucs->count())
				<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>Tên Tin Tức</th>
						<th>Chi Tiết Ngắn</th>
						<th>Nôi Dung</th>
						<th>Ảnh</th>
						<th>Ngày Up</th>
					</tr>
					</thead>

					<tbody>
					@foreach ($tintucs as $tintuc)
						<tr>
							<td width="10px">{{{ $tintuc->tentt }}}</td>
							<td width="20px">{{{ $tintuc->chitietngan }}}</td>
							<td width="150px">{{{ $tintuc->noidung }}}</td>
							<td width="10px">{{{ $tintuc->anh }}}</td>
							<td width="10px">{{{ $tintuc->ngayup }}}</td>
							<td>{{ link_to_route('tintucs.edit', 'Sửa', array($tintuc->id), array('class' => 'btn btn-info')) }}</td>
							<td>
								{{ Form::open(array('method' => 'DELETE', 'route' => array('tintucs.destroy', $tintuc->id))) }}
								{{ Form::submit('Xóa', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			@else
				There are no tintucs
			@endif

		</div>
	</div>
@stop




@stop
