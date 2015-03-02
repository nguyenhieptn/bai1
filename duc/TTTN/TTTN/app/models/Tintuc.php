<?php

class Tintuc extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'tentt' => 'required',
		'chitietngan' => 'required',
		'noidung' => 'required',
		'anh' => 'required',
		'ngayup' => 'required'
	);
}
