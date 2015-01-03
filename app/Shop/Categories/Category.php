<?php namespace Shop\Categories;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends \Eloquent
{
    use SoftDeletingTrait;

    protected $fillable = ['title','body','published_at'];

    /**
     * Retrive child categories
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getMyChilds()
    {
       return $this->hasMany('Shop\Categories\Category','parent_id');
    }

    /**
     * Get parent category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getMyParent()
    {
        return $this->belongsTo('Shop\Categories\Category','parent_id');
    }
}