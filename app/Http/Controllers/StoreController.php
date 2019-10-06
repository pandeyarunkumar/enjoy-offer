<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\StoreService;
use Validator;

class StoreController extends Controller
{
    protected $storeService;

	public function __construct(StoreService $storeService) {
		
		$this->storeService = $storeService;
    } 


    public function saveStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:stores',
            'postal_code'  => 'required',
        ]);
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $store = $this->storeService->saveStore($request);
        return $this->respondWithSuccess($store);
        
    }

    public function getStores(){
       
        $stores = $this->storeService->getStores();

        return $this->respondWithSuccess($stores);            
    } 

    public function saveProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
            'category_id'  => 'required',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $store = $this->storeService->saveProduct($request);

        if($store){
            return $this->respondWithSuccess($store);
        }
        else{
            return $this->respondWithSuccessMessage("Name of the product alredy has taken");  
        }

        
    }

}
