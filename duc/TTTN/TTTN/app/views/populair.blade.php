@extends('index')
@section('content')
	<div class="title">
	<h2>Điểm Đến Nổi Bật</h2>
	</div>
	<?php $tour_hot=DB::table('tours')->orderBy('id','DESC')->paginate(3); ?>
	<div class="block-content hovergallery">
		<div class="col-sm-12 alpha">
			@foreach($tour_hot as $item_tour)
				<ul>
					<li>
						<h4><a href="{{asset("chitiettour/index.php?id=$item_tour->id")}}">{{$item_tour->tentour}}</a></h4>
						<ul class="media-list">
							<li class="media">
								<a class="pull-left" href="#">
									<img src="{{asset("../public/images/tour/$item_tour->images")}}" width="69" height="69" >
								</a>
								<div class="media-body">
									<p>
										{{$item_tour->chitietngan}}
										<a href="{{asset("chitiettour/index.php?id=$item_tour->id")}}">Chi Tiết</a>
									</p>
								</div>
							</li>
						</ul>
					</li>
				</ul>

			@endforeach
				<?php
				$tour=DB::table('tours')->get();
				$total=Count($tour);
				$tourInpages=3;
				$totalpage=ceil($total/$tourInpages);

				?>
				@for($i=1;$i<=$totalpage;$i++)
					<a href="{{asset("?page=$i")}}">{{$i}}</a>
				@endfor
		</div>
	</div>
	</div>

@stop