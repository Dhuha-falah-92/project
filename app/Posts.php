<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'title', 'content','category_id','slug',
    ];
    protected $dates =['deleted_at' ];

    


    public function getContentAttribute($content)
    {
        return asset($content);
    }


    public function tags()
    {
   
            return $this->belongsToMany('App\Tag');
       
    }


}
