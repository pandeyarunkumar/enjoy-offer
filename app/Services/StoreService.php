<?php

namespace App\Services;

use App\Store;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Carbon\Carbon;

class StoreService extends MasterService
{
    public function saveStore(Request $request){
       $store = new Store();
       $store->user_id = $request->user->id;
       $store->name = $request->name;
       $store->postal_code = $request->postal_code;
       $store->address = $request->address;       
       $store->lat =  $request->lat;
       $store->long =  $request->long;

       $logo = $request->logo;

       if($logo){
           $res_logo = $this->saveImage($logo);
           $store->logo = $res_logo->id;
       }
       

       $cover_image = $request->cover_image;
       
       if($cover_image){
           $res_cover_image = $this->saveImage($cover_image);
           $store->cover_image = $res_cover_image->id;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
       }

       $store->save();

       return $store;

    }

    public function getStores(){
        $stores = Store::with('seller')->get();
        return $stores; 
    }
}
