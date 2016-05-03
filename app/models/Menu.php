<?php

class Menu extends \Eloquent {
	protected $table = "menu";
	protected $fillable = [
		'id',
		'nameru',
		'position',
		'publish',
		'created_at',
		'updated_at',
		'body',
		'alias'
	];

	public static $rules = [
		'nameru'	=> 'required|between:3,255',
		'body'		=> 'required',
		'position'	=> 'required|integer',
		'publish'	=> 'required|integer',
		'alias'		=> 'required|string'
	];
}