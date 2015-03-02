@extends('layouts.scaffold')

@section('main')

<h1>Show Phanhoi</h1>

<p>{{ link_to_route('phanhois.create', 'Return to all phanhois') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Tenph</th>
				<th>Noidung</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $phanhoi->tenph }}}</td>
					<td>{{{ $phanhoi->noidung }}}</td>
                    <td>{{ link_to_route('phanhois.edit', 'Edit', array($phanhoi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('phanhois.destroy', $phanhoi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
