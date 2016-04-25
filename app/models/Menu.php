<?php

class Menu extends \Eloquent {
	protected $table = "menu";
	protected $fillable = ['id','nameru','position','publish','created_at','updated_at'];
}