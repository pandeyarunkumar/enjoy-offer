<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getfeaturedImageAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }

    public function images(){
        return $this->belongsToMany(Image::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
