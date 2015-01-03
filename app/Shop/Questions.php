<?php namespace Shop;

use Eloquent;

class Questions extends Eloquent{

    /**
     * @var $fillable Attributes
     */
    protected $fillable  = ['title','type','options','category_id'];

    /**
     * Questions Belongs to a category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('Shop\Categories\Category','category_id');
    }

    /**
     * A question has many answers
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('Shop\Answers','question_id');
    }
}