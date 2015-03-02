<?php

class Tour extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'tentour' => 'required',
		'chitietngan' => 'required',
		'chitietdai' => 'required',
		'images' => 'required',
		'gia' => 'required'
	);
}
