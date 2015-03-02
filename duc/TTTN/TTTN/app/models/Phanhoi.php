<?php

class Phanhoi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'tenph' => 'required',
		'noidung' => 'required'
	);
}
