<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $hidden = ['parent_category_id'];
    
    public function geticonAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }

    public function getimageAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }
}
