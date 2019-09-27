<?php

namespace App\Services;

use App\Store;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Carbon\Carbon;

class StoreService 
{
    public function saveStore(Request $request){
       $store = new Store();
       $store->user_id = $request->user->id;
       $store->name = $request->name;
       $store->postal_code = $request->postal_code;
       $store->address = $request->address;       
       $store->lat =  $request->lat;
       $store->long =  $request->long;
       $store->save();

       return $store;

    }
}
