<?php

namespace App;
use \App\Image;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function image(){


        return $this->morphOne(Image::class, 'imageable'); //ovde stvaramp polimorficnu vezu sa modelom image i kazemo
        //da moze da ima jednu sliku
    }
}
