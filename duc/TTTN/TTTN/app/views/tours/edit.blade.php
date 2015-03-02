@extends('adindex')
@section('content')


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <h1>Sửa Tour Du Lịch</h1></h3>
    </div>
    <div class="panel-body">


    {{ Form::model($tour, array('method' => 'PATCH', 'route' => array('tours.update', $tour->id))) }}
        <table>
            <tr>
                <td>{{ Form::label('tentour', 'Tên Tour:') }}</td>
                <td>{{ Form::text('tentour') }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('chitietngan', 'Chi TIết Ngắn:') }}</td>
                <td> {{ Form::text('chitietngan') }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('chitietdai', 'Chi TIết Dài:') }}</td>
                <td>{{ Form::textarea('chitietdai') }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('images', 'Ảnh:') }}</td>
                <td>{{ Form::file('images') }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('gia', 'Gia:') }}</td>
                <td>{{ Form::text('gia') }}</td>
            </tr>
        </table>

			{{ Form::submit('Sửa', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tours.show', 'Cancel', $tour->id, array('class' => 'btn')) }}

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
    </div>
</div>
@stop
