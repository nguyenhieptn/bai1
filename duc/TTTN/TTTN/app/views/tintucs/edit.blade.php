@extends('adindex')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Sửa Thông Tin Tourt</h3>
        </div>
        <div class="panel-body">

            {{ Form::model($tintuc, array('method' => 'PATCH', 'route' => array('tintucs.update', $tintuc->id))) }}
            <table>
                <tr>
                    <td>{{ Form::label('tentt', 'Tên Thông Tin:') }}</td>
                    <td> {{ Form::text('tentt') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('chitietngan', 'Chi Tiết Ngắn:') }}</td>
                    <td>{{ Form::text('chitietngan') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('noidung', 'Nội Dung:') }}</td>
                    <td>{{ Form::textarea('noidung') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('anh', 'Ảnh:') }}</td>
                    <td>{{ Form::file('anh') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('ngayup', 'Ngày Up:') }}</td>
                    <td>{{ Form::text('ngayup') }}</td>
                </tr>
            </table>

                    {{ Form::submit('Sửa', array('class' => 'btn btn-info')) }}
                    {{ link_to_route('tintucs.show', 'Cancel', $tintuc->id, array('class' => 'btn')) }}
            {{ Form::close() }}
            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif
        </div>
    </div>

@stop
