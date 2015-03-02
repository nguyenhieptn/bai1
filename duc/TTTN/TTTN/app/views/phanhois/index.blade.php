@extends('index')
@section('content')
	<div class="title">
		<h2 style="font-size:30px;">Xin vui lòng đóng góp ý kiến</h2>
	</div>
	<div class="block-content hovergallery">
		<div class="col-sm-12 alpha">

			{{ Form::open(array('route' => 'phanhois.store')) }}
			<table>
				<tr>
					<td>{{ Form::label('tenph', 'Tên phản hồi:') }}</td>
					<td>{{ Form::text('tenph') }}</td>
				</tr>
				<tr>
					<td>{{ Form::label('noidung', 'Nội dung:') }}</td>
					<td>{{ Form::textarea('noidung') }}</td>
				</tr>
				<tr>
					<td></td>
					<td>{{ Form::submit('Gửi ý kiến', array('class' => 'btn btn-info')) }}</td>
				</tr>
			</table>
			{{ Form::close() }}

			@if ($errors->any())

				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			@endif
		</div>
	</div>
	</div>

@stop