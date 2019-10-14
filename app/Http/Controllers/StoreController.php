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

    public function getSellerStores(Request $request){
       
        $stores = $this->storeService->getSellerStores($request);

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
            return $this->respondWithSuccessMessage("Product saved successfuly");                                       
        }
        else{
            return $this->respondWithError("Name of the product alredy has been taken");  
        }

        
    }

    public function getProducts(Request $request){

        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $Products = $this->storeService->getProducts($request);

        return $this->respondWithSuccess($Products);            
    } 

    public function getImages(){
        $images = $this->storeService->getImages();
        return $this->respondWithSuccess($images);            
    } 

}
