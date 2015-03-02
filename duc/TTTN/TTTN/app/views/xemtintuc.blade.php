@if(isset($_GET["id"]))
    <?php $id=$_GET["id"]; ?>

    @extends('index')
@section('content')
    <?php $tintuc=DB::table('tintucs')->where('id',$id)->first();?>
    <div class="title">
        <h2>Tin Tức Mới {{$tintuc->tentt}}</h2>
    </div>
    <div class="block-content hovergallery">
        <div class="col-sm-12 alpha">
            <img src="{{asset("../public/images/tour/$tintuc->anh")}}">
            <ul>
                <li>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">

                            </a>
                            <div class="media-body">
                                <p>
                                    {{$tintuc->noidung}}
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