@extends('index')
@section('content')
    <div class="title">
        <h2>Điểm Đến Nổi Bật</h2>
    </div>
    <div class="block-content hovergallery">
        <div class="col-sm-12 alpha">
            @foreach($tours as $tour)
                <ul>
                    <li>
                        <h4><a href="{{asset("chitiettour/index.php?id=$tour->id")}}">{{$tour->tentour}}</a></h4>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img src="{{asset("../public/images/tour/$tour->images")}}" width="69" height="69" >
                                </a>
                                <div class="media-body">
                                    <p>
                                        {{$tour->chitietngan}}
                                        <a href="{{asset("chitiettour/index.php?id=$tour->id")}}">Chi Tiết</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
    </div>
@stop