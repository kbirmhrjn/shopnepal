<?php

class Bike extends \Eloquent {
	protected $fillable = [];

    protected $timestamps = false;

    /*
     * Morph Many
     */
    public function products()
    {
        return $this->morphMany('Product', 'productable');
    }
}