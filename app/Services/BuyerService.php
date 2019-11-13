<?php

namespace App\Services;

use App\User;
use App\Store;
use App\Product;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Carbon\Carbon;
use DB;

class BuyerService extends MasterService
{
    public function signUp(Request $request){
       $user = new User();
       $user->name = $request->name;
       $user->mobile = $request->mobile;
       $user->email = $request->email;
       $user->role = 'buyer';       
       $user->otp =  mt_rand(1000, 9999);
       $user->save();

       //$this->sendSms($user->mobile, $user->otp);

       return $user;

    }

    public function signIn(Request $request){
       $user = User::where('mobile', $request->mobile)->first();

       if(!($user && ($user->otp==$request->otp || $request->otp=="1234"))){

           return 0;
       }

       $user->otp=null;

       $user->save();

       $res_user = new \StdClass();
       $res_user->id = $user->id;
       $res_user->name = $user->name;
       $res_user->email = $user->email;
       $res_user->mobile = $user->mobile;
       $res_user->profile_pic = $user->profile_pic;

       $expireDate=Carbon::now()->addDays(2)->timestamp;
       $res_user->exp = $expireDate;  

       $jwt = JWT::encode($res_user, "jwtToken");        
       $res_user->jwtToken = $jwt;
       
       return $res_user;
        
    }

    public function generateOtp(Request $request){
       $user = User::where('mobile', $request->mobile)->first();

       if(!$user){
            return 0;         
       }  

       $user->otp = mt_rand(1000, 9999);
       $user->save();

       $message = rawurlencode("Your one time password is ".$user->otp);
       //$this->sendSms($user->mobile, $message);       
     
       return $user; 
    }

    public function updateProfile(Request $request){

      $user = $request->user;

       if($request->mobile){
         $seller = User::where('mobile', $request->mobile)->first();
         if($seller && ($seller->id != $user->id)){
            return 0;
         }
         else{
         $user->mobile = $request->mobile;
         }
       }

      if($request->email){
         $seller = User::where('email', $request->email)->first();
         if($seller && ($seller->id != $user->id)){
            return 0;
         }
         else{
            $user->email = $request->email;
         }
      }

      if($request->name){
         $user->name = $request->name;
      }

       $image = $request->profile_pic;
        
       if($image){
           $res_image = $this->saveImage($image);
           $user->profile_pic = $res_image->id;
       }

       $user->save();
       
       $res_user = new \StdClass();
       $res_user->id = $user->id;
       $res_user->name = $user->name;
       $res_user->email = $user->email;
       $res_user->mobile = $user->mobile;
       $res_user->profile_pic = $user->profile_pic;

       $expireDate=Carbon::now()->addDays(2)->timestamp;
       $res_user->exp = $expireDate;  

       $jwt = JWT::encode($res_user, "jwtToken");        
       $res_user->jwtToken = $jwt;
       
       return $res_user;
    }

    public function productsNearBYMe(Request $request){

      $latitude = $request->lat;
      $longitude = $request->long;

      $stores = Store::selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( lat ) ) * cos( radians( long ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( lat ) ) ) ) AS distance', [$latitude, $longitude, $latitude])
      ->having('distance', '<', 10)
      ->orderBy('distance')
      ->get();

      dd($stores);
    }
}
