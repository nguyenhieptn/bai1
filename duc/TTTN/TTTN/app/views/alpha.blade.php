<?php $amthuc=DB::table('tbl_amthuc')->orderBy('id','DESC')->paginate(3); ?>
	@foreach($amthuc as $item_amthuc)
		<div class="col-md-4 alpha">
			<div class="block nieuws">
				<div class="title">
					<h2>Ẩm Thực</h2>
				</div>
				<div class="block-content">
					<div class="thumbail-post">
						<img src="{{asset("../public/images/amthuc/$item_amthuc->images")}}" width="278" height="184" >
						<div class="description">
							<h3>{{$item_amthuc->tenamthuc}}</h3>
						</div>
					</div>
					<div class="content-post">
						<ul>
							<li>
								<h4><a href="{{asset("amthuc/index.php?id=$item_amthuc->id")}}">{{$item_amthuc->tenamthuc}}</a></h4>
								<p>{{$item_amthuc->chitietngan}}</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	@endforeach
<?php
$met=DB::table('tbl_amthuc')->get();
$total=Count($met);
$metInpages=3;
$totalpage=ceil($total/$metInpages);

?>
@for($i=1;$i<=$totalpage;$i++)
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="{{asset("?page=$i")}}">{{$i}}</a>
@endfor