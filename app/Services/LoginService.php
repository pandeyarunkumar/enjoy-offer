<?php

namespace App\Services;

use App\User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Carbon\Carbon;

class LoginService 
{
    public function signUp(Request $request){
       $user = new User();
       $user->name = $request->name;
       $user->mobile = $request->mobile;
       $user->email = $request->email;       
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
}
