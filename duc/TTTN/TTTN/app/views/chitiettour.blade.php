@if(isset($_GET["id"]))
    <?php $id=$_GET["id"]; ?>

@extends('index')
@section('content')
    <?php $tour_cat=DB::table('tours')->where('id',$id)->first();?>
    <div class="title">
        <h2>Điểm Đến Nổi Bật {{$tour_cat->tentour}}</h2>
    </div>
    <div class="block-content hovergallery">
        <div class="col-sm-12 alpha">
            <img src="{{asset("../public/images/tour/$tour_cat->images")}}">
                <ul>
                    <li>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#">

                                </a>
                                <div class="media-body">
                                    <p>
                                        {{$tour_cat->chitietdai}}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
    </div>

@stop
@endif