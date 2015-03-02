@if(isset($_GET["id"]))
    <?php $id=$_GET["id"]; ?>

    @extends('index')
@section('content')
    <?php $amthuc=DB::table('tbl_amthuc')->where('id',$id)->first();?>
    <div class="title">
        <h2>Tin Tức Mới {{$amthuc->tenamthuc}}</h2>
    </div>
    <div class="block-content hovergallery">
        <div class="col-sm-12 alpha">
            <img style="padding-left:20px;"src="{{asset("../public/images/amthuc/$amthuc->images")}}">
            <ul>
                <li>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">

                            </a>
                            <div class="media-body">
                                <p>
                                    {{$amthuc->chitietdai}}
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