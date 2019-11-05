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

        if($store){
            return $this->respondWithSuccessMessage("store added successfuly");                                       
        }
        
    }

    public function updateStore(Request $request){
        $validator = Validator::make($request->all(), [
            'postal_code'  => 'required',
            'store_id'     => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $store = $this->storeService->updateStore($request);

        if($store){
            return $this->respondWithSuccessMessage("store updated successfuly");                                       
        }
        else{
            return $this->respondWithError("Invalid store");  
        }
    }

    public function disableStore(Request $request){
        $validator = Validator::make($request->all(), [
            'store_id'  => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }

        $store = $this->storeService->disableStore($request);

        if($store && $store->is_active==0){
            return $this->respondWithSuccessMessage("store disabled successfuly");                                       
        }
        if($store && $store->is_active==1){
            return $this->respondWithSuccessMessage("store enabled successfuly");                                       
        }
        else{
            return $this->respondWithError("Invalid store");  
        }
        
    }



    public function getStores(Request $request){

        // $validator = Validator::make($request->all(), [
        //     'search_item' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return $this->respondWithValidationError($validator);
        // }
       
        $stores = $this->storeService->getStores($request);

        return $this->respondWithSuccess($stores);            
    } 

    public function getSellerStores(Request $request){

        // $validator = Validator::make($request->all(), [
        //     'search_item' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return $this->respondWithValidationError($validator);
        // }
       
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

    public function updateProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
            'category_id'  => 'required',
            'product_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
        $product = $this->storeService->updateProduct($request);

        if($product){
            return $this->respondWithSuccessMessage("Product updated successfuly");                                       
        }
        else{
            return $this->respondWithError("Invalid product");  
        }

    }

    public function getProducts(Request $request){

        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
            //'search_item' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $Products = $this->storeService->getProducts($request);

        return $this->respondWithSuccess($Products);            
    } 

    public function getSellerProducts(Request $request){
       
        $Products = $this->storeService->getSellerProducts($request);

        return $this->respondWithSuccess($Products);            
    } 

    public function getImages(){
        $images = $this->storeService->getImages();
        return $this->respondWithSuccess($images);            
    } 

    public function deleteProduct(Request $request){

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }

        $product = $this->storeService->deleteProduct($request);

        if($product){
            return $this->respondWithSuccessMessage("Product deleted successfuly");                                       
        }
        else{
            return $this->respondWithError("You can not delete this product");  
        }

    }

    public function searchProducts(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'search_item' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return $this->respondWithValidationError($validator);
        // }

        $Products = $this->storeService->searchProducts($request);

        return $this->respondWithSuccess($Products);   
    }

    public function getReviews(Request $request){

        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $reviews = $this->storeService->getReviews($request);

        return $this->respondWithSuccess($reviews);            
    } 

    public function getRating(Request $request){

        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->respondWithValidationError($validator);
        }
       
        $rating = $this->storeService->getRating($request);

        return $this->respondWithSuccess($rating);            
    }
    
    public function getBanners(){
       
        $banners = $this->storeService->getBanners();

        return $this->respondWithSuccess($banners);            
    } 


}
