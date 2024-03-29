<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['store_id', 'category_id', 'user_id', 'created_at', 'updated_at'];
    
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
        return $this->belongsTo(Category::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function seller(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
