<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $hidden=['created_at', 'updated_at'];
    public function getimageAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }
}
