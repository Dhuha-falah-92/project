<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'sitename', 'logo','slogo','phone','email',
        ];



        public function getLogoAttribute($logo)
    {
        return asset($logo);
    }
}
