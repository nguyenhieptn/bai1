@extends('layouts.scaffold')

@section('main')

<h1>Create Phanhoi</h1>

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

@stop


