<?php namespace Shop\Products;
use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Eloquent
{
    use SoftDeletingTrait;
    /**
     * @var array
     */
    protected $fillable = ['title','description','url','expired_at'];

    /**
     * A Product has many unique details
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Answers','product_id');
    }

    /**
     * A product has many images
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        return $this->morphMany('Shop\Images\Image','imageable');
    }
}