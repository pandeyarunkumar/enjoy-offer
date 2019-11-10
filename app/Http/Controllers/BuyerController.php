<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BuyerService;
use Validator;  

class BuyerController extends Controller
{
    protected $buyerService;
	public function __construct(BuyerService $buyerService) {
		
		$this->buyerService = $buyerService;
    } 
    
    public function signIn(Request $request){
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $user = $this->buyerService->signIn($request);
        if(!$user){
            return $this->respondNotFound("invalid otp");                        
        }
        else{
            return $this->respondWithSuccess($user);            
        }
        
    }
    public function signUp(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required|unique:users',
            'email'  => 'required|unique:users',
        ]);
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $user = $this->buyerService->signUp($request);
        return $this->respondWithSuccessMessage("Your information has been saved successfuly and an otp has been sent to your mobile number");
        
    }
    public function generateOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $user = $this->buyerService->generateOtp($request);
        if(!$user){
            return $this->respondWithError("Mobile number is not registered");                                    
        }
        else{
            return $this->respondWithSuccessMessage("Otp has been sent to your mobile number");  
        }
        
    }

    public function updateProfile(Request $request){

        $user = $this->buyerService->updateProfile($request);
        
        if($user){
            return $this->respondWithSuccess($user);                    
        }
        else{
            return $this->respondWithError("Mobile number or email has already been taken");                                    
        }
    }
}
