<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'slug' => 'required',
		'draft' => 'required',
		'body' => 'required'
	);
}
