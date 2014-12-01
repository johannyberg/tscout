<?php

class Company extends \Eloquent {
	protected $guarded = ['id'];

	public function categories()
    {
        return $this->belongsToMany('Category');
    }

    public function businesses()
    {
        return $this->belongsToMany('Business');
    }
}