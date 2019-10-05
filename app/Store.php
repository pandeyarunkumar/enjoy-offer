<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $hidden = ['user_id', 'created_at', 'updated_at'];

    public function seller(){
        return $this->belongsTo(User::class, 'user_id'); 
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
}
