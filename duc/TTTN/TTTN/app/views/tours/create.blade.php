@extends('adindex')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Nhập thông tin Tour Du Lịch</h3>
        </div>
        <div class="panel-body">


            {{ Form::open(array('route' => 'tours.store')) }}
                <table>
                    <tr>
                        <td>{{ Form::label('tentour', 'Tên Tour:') }}</td>
                        <td>{{ Form::text('tentour') }}</td>
                    </tr>
                    <tr>
                        <td>{{ Form::label('chitietngan', 'Chi Tiết Ngắn:') }}</td>
                        <td>{{ Form::text('chitietngan') }}</td>
                    </tr>
                    <tr>
                        <td>{{ Form::label('chitietdai', 'Chi Tiết Dài:') }}</td>
                        <td> {{ Form::textarea('chitietdai') }}</td>
                    </tr>
                    <tr>
                        <td>{{ Form::label('images', 'Ảnh:') }}</td>
                        <td>{{ Form::file('images') }}</td>
                    </tr> <tr>
                        <td>{{ Form::label('gia', 'Giá:') }}</td>
                        <td> {{ Form::text('gia') }}</td>
                    </tr> <tr>
                        <td></td>
                        <td>{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}</td>
                    </tr>


                </table>
            {{ Form::close() }}

            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif

        </div>
    </div>
@stop


