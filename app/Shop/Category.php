<?php

class Category extends \Eloquent {
	protected $fillable = [];


    /**
     * HasMany products
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('Product');
    }
}