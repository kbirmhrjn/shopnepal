<?php namespace Shop\Images;

class Image extends \Eloquent
{
    protected $fillable = ['name', 'type', 'url','imageable_id','imageable_type'];


    /**
     * Polimorphic images
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}