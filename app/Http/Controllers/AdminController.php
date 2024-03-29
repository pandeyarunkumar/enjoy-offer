<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use Validator;  

class AdminController extends Controller
{
    protected $adminService;

	public function __construct(AdminService $adminService) {
		
		$this->adminService = $adminService;

    } 

    public function SignIn(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',  
            'password' => 'required',             
        ]);
        
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }

        else{

            $employee = $this->adminService->signIn($request);
            if(!$employee){
                return $this->respondNotFound("invalid credentials");                           
            }

            return $this->respondWithSuccess($employee);            
                
        }
    }

    public function saveCategory(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories'
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        else{
            $category = $this->adminService->saveCategory($request);
            if($category){
                return $this->respondWithSuccessMessage("Category saved successfuly");                           
            } 
            else{
                return $this->respondNotFound("Gievn parent category not found");                           
            }
        }
    }

    public function getCategories(){
       
        $categories = $this->adminService->getCategories();

        return $this->respondWithSuccess($categories);            
    } 

    public function saveProductImages(Request $request){
        $validator = Validator::make($request->all(), [
            'images' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        else{
            $status = $this->adminService->saveProductImages($request);
            if($status){
                return $this->respondWithSuccessMessage("Images saved successfuly");                           
            } 
            else{
                return $this->respondNotFound("Something went wrong");                           
            }
        }
    }

    public function getSubCategories(Request $request){

        $validator = Validator::make($request->all(), [
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $categories = $this->adminService->getSubCategories($request);

        return $this->respondWithSuccess($categories);            
    } 
}
