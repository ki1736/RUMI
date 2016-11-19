<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\image;



class Content extends Model
{
    //
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
