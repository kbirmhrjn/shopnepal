<?php namespace Shop;

use Eloquent;

class Answers extends Eloquent{

    protected $fillable = ['body', 'question_id', 'product_id'];

    /**
     * An Answer belongs to a Question
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questions()
    {
        return $this->belongsTo('Shop\Questions' , 'question_id');
    }

    /**
     * An Answer also belongs to a product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Shop\Products\Product','product_id');
    }
}