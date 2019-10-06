<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $hidden = ['pivot', 'uploaded_by_admin', 'created_at', 'updated_at'];

    public function getUrlAttribute($value){
        return asset($value);
    }
}
