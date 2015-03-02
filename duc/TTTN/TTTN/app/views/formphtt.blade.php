@extends('index')
@section('content')
	<div class="title">
	<h2 style="font-size:30px;">Xin vui lòng đóng góp ý kiến</h2>
	</div>
	<div class="block-content hovergallery">
		<div class="col-sm-12 alpha">
			{{ Form::open(array('route' => 'phanhois.store')) }}
			<ul>
				<li>
					{{ Form::label('tenph', 'Tenph:') }}
					{{ Form::text('tenph') }}
				</li>

				<li>
					{{ Form::label('noidung', 'Noidung:') }}
					{{ Form::textarea('noidung') }}
				</li>

				<li>
					{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
				</li>
			</ul>
			{{ Form::close() }}

			@if ($errors->any())
				<ul>
					{{ implode('', $errors->all('<li class="error">:message</li>')) }}
				</ul>
			@endif
		</div>
	</div>
	</div>

@stop