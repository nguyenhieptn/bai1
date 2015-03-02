@extends('layouts.scaffold')

@section('main')

<h1>Edit Phanhoi</h1>
{{ Form::model($phanhoi, array('method' => 'PATCH', 'route' => array('phanhois.update', $phanhoi->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('phanhois.show', 'Cancel', $phanhoi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
