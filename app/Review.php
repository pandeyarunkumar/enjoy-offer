<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $hidden = ['store_id', 'created_at', 'updated_at', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
