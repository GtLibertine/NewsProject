<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [  'title','lead','description','body','images' ,'tags' ];
    use Sluggable;

    protected $casts = [
        'images' => 'array'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function path(){
        return "/news/$this->slug";
    }
}
