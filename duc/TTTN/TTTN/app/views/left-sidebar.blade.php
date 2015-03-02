
<div class="title">
	<h2>Tin Mới</h2>
</div>
<div class="block-content">
	<?php $tintuc=DB::table('tintucs')->orderBy('id','DESC')->get() ?>

	<ul>

		@foreach($tintuc as $item_tin)

			@if ($item_tin !== null)
				<li>
					<h4><a href="{{asset("tintuc/index.php?id=$item_tin->id")}}">{{$item_tin->tentt}}</a></h4>
					<p>{{$item_tin->chitietngan}}</p>
				</li>
			@endif

		@endforeach
	</ul>

</div>