<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Image;



class Content extends Model
{
    //
    public function images()
    {
        return $this->hasOne('\App\Image');
    }

    public function images_all()
    {
        return $this->hasMany('\App\Image');
    }

}
