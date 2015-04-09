@extends('layouts.scaffold')

@section('main')

<h1>Create Post</h1>

{{ Form::open(array('route' => 'posts.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug') }}
        </li>

        <li>
            {{ Form::label('draft', 'Draft:') }}
            {{ Form::textarea('draft') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
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


