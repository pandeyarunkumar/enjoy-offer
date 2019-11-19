<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $hidden = ['user_id', 'created_at', 'updated_at', 'package_id'];
    protected $appends = ['avg_rating'];

    public function seller(){
        return $this->belongsTo(User::class, 'user_id'); 
    }

    public function package(){
        return $this->belongsTo(Package::class, 'package_id'); 
    }

    public function getlogoAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }

    public function getcoverImageAttribute($value)
    {
        $image = Image::find($value);
        if($image){
            return asset($image->url);
        }
    }

    public function getAvgRatingAttribute(){
        return Review::where('store_id', $this->id)->avg('rating');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
