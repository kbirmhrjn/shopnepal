<?php

class Product extends \Eloquent {
	protected $fillable = [];

    /*
     * MorphTo
     */
    public function productable()
    {
        return $this->morphTo();
    }

    /**
     * Product BelongsTo Category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
      return $this->belongsTo('Category');
    }
}