<?php

namespace App\Services;

use App\Store;
use App\Product;
use App\Category;
use App\Image;
use App\Review;
use App\Package;
use App\Payment;
use App\Banner;
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
       $store->business_email = $request->business_email;       
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

    public function UpdateStore(Request $request){

        $store = Store::where('id', $request->store_id)->where('user_id', $request->user->id)->first();

        if(!$store){
            return 0;
        }

        if($request->name){
            $Checkstore = Store::where('name', $request->name)->first();
            if($Checkstore && ($Checkstore->id != $store->id)){
                return 0;
            }
            $store->name = $request->name;
        }

        $store->postal_code = $request->postal_code;
        $store->address = $request->address;  
        $store->business_email = $request->business_email;       
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

     public function DisableStore(Request $request){
        
        $store = Store::where('id', $request->store_id)->where('user_id', $request->user->id)->first();

        if(!$store){
            return 0;
        }

        $store->is_active = !($store->is_active);
        $store->save();
        return $store;
 
     }

 

    public function getStores($request){

        $search_item = $request->search_item;

        if(!$search_item){
           return Store::with('seller')->with('package')->orderBy('id', 'DESC')->get();
        }

        return Store::where('name', 'like', "%".$search_item."%")->with('seller')->with('package')->orderBy('id', 'DESC')->get();
    }

    public function getSellerStores($request){
        // $stores = $request->user->stores;
        // return $stores; 

        $search_item = $request->search_item;

        if(!$search_item){
           return Store::where('user_id', $request->user->id)->orderBy('id', 'DESC')->with('package')->get();
        }

        return Store::where('user_id', $request->user->id)->where('name', 'like', "%".$search_item."%")->with('package')->orderBy('id', 'DESC')->get();
    }
    
    public function saveProduct(Request $request){

        $product=Product::where('store_id', $request->store_id)->where('name', $request->name)->first();

        if($product){
            return 0;
        }

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->store_id = $request->store_id;
        $product->user_id = $request->user->id;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->cost_price = $request->cost_price;
        $product->selling_price = $request->selling_price;
        $product->compare_price = $request->compare_price;
        $product->compare_text = $request->compare_text;
        $product->is_featured = $request->is_featured;
        $product->is_published = $request->is_published;

        if($request->is_published){
            $product->published_at = Carbon::now();
        }

        if($request->featured_image_id){
            $product->featured_image = $request->featured_image_id;
        }

        if($request->featured_image_file){
           $res_featured_image = $this->saveImage($request->featured_image_file);
           $product->featured_image = $res_featured_image->id; 
        }
        
        $product->save();

        if($request->image_files && count($request->image_files)){
            $image_ids = [];
            foreach($request->image_files as $image){
                $res_image = $this->saveImage($image);
                $image_ids[] = $res_image->id; 
            }

            $product->images()->attach($image_ids);
        }

        if($request->image_ids && count($request->image_ids)){
            $product->images()->attach($request->image_ids);
        }

        return $product;

    }

    public function updateProduct(Request $request){

        $product=Product::where('store_id', $request->store_id)->where('id', $request->product_id)->first();

        if(!$product){
            return 0;
        }

        $product->category_id = $request->category_id;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->cost_price = $request->cost_price;
        $product->selling_price = $request->selling_price;
        $product->compare_price = $request->compare_price;
        $product->compare_text = $request->compare_text;
        $product->is_featured = $request->is_featured;
        $product->is_published = 0;

        if($request->featured_image_id){
            $product->featured_image = $request->featured_image_id;
        }

        if($request->featured_image_file){
           $res_featured_image = $this->saveImage($request->featured_image_file);
           $product->featured_image = $res_featured_image->id; 
        }
        
        $product->save();

        if($request->image_files && count($request->image_files)){
            $image_ids = [];
            foreach($request->image_files as $image){
                $res_image = $this->saveImage($image);
                $image_ids[] = $res_image->id; 
            }

            $product->images()->sync($image_ids);
        }

        if($request->image_ids && count($request->image_ids)){
            $product->images()->sync($request->image_ids);
        }

        //return $product;

        $res_product = new \StdClass();
        $res_product->product_id = $product->id;
        $res_product->Categoryimages = $this->getImages($request);

        return $res_product;

    }


    public function getProducts($request){

        $search_item = $request->search_item;

        if(!$search_item){
           return Product::where('store_id', $request->store_id)->with('category', 'images', 'seller')->orderBy('id', 'DESC')->get();
        }

        $productByName =  Product::where('store_id', $request->store_id)->where('name', 'like', "%".$search_item."%")->with('category', 'images', 'seller', 'store')->orderBy('id', 'DESC')->get();

        $productByCategory =  Product::where('store_id', $request->store_id)->with('category', 'images', 'seller')
        ->whereHas('category', function ($q) use ($search_item) {
            $q->where('name', 'like', "%{$search_item}%");
        })->orderBy('id', 'DESC')->get();

        $res = $productByName->merge($productByCategory)->unique();
        
        return $res;

        // $products = Product::where('store_id', $request->store_id)->with('category')->with('images')->orderBy('id', 'DESC')->get();
        // return $products; 
    }

    public function getSellerProducts($request){
        $products = Product::where('user_id', $request->user->id)->with('category', 'images', 'seller', 'store')->orderBy('id', 'DESC')->get();
        return $products; 
    }

    public function getImages($request){
        $images = Image::where('category_id', $request->category_id)->get();
        return $images; 
    }

    public function deleteProduct($request){

        $product = Product::findOrFail($request->product_id);

        if($product->user_id != $request->user->id){
            return 0;
        }

        $product->images()->sync([]);

        $res = Product::where('id',$product->id)->delete();

        return $res;
    }

    public function searchProducts($request){

        $search_item = $request->search_item;

        if(!$search_item){
           return Product::where('user_id', $request->user->id)->with('category', 'images', 'seller', 'store')->orderBy('id', 'DESC')->get();
        }

        $productByName =  Product::where('user_id', $request->user->id)->where('name', 'like', "%".$search_item."%")->with('category', 'images', 'seller', 'store')->orderBy('id', 'DESC')->get();

        $productByCategory =  Product::where('user_id', $request->user->id)->with('category', 'images', 'seller', 'store')
        ->whereHas('category', function ($q) use ($search_item) {
            $q->where('name', 'like', "%{$search_item}%");
        })->orderBy('id', 'DESC')->get();

        $productByStore =  Product::where('user_id', $request->user->id)->with('category', 'images', 'seller', 'store')
        ->whereHas('store', function ($q) use ($search_item) {
            $q->where('name', 'like', "%{$search_item}%")->orderBy('id', 'DESC');
        })->get();

        $res = $productByName->merge($productByCategory);
        $res2 = $res->merge($productByStore)->unique();
        
        return $res2;

    }

    public function getReviews(Request $request){
        $reviews = Review::where('store_id', $request->store_id)->with('user')->get();
        return $reviews;
    }

    public function getRating(Request $request){
        $rating = Review::where('store_id', $request->store_id)->with('user')->avg('rating');
        return $rating;
    }

    public function getBanners(){
        $banners = Banner::where('type', 'seller')->get();
        return $banners; 
    }

    public function saveProductContent(Request $request){

        $product=Product::where('store_id', $request->store_id)->where('name', $request->name)->first();

        if($product){
            return 0;
        }

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->store_id = $request->store_id;
        $product->user_id = $request->user->id;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->cost_price = $request->cost_price;
        $product->selling_price = $request->selling_price;
        $product->compare_price = $request->compare_price;
        $product->compare_text = $request->compare_text;
        $product->is_featured = $request->is_featured;
        $product->is_published = $request->is_published;

        $product->save();

        $res_product = new \StdClass();
        $res_product->product_id = $product->id;
        $res_product->Categoryimages = $this->getImages($request);

        return $res_product;
    }

    public function saveProductImages(Request $request){

        $product=Product::where('id', $request->product_id)->first();

        if(!$product){
            return 0;
        }

        if($request->image_files && count($request->image_files)){
            $image_ids = [];
            foreach($request->image_files as $image){
                $res_image = $this->saveImage($image);
                $image_ids[] = $res_image->id; 
            }

            $product->images()->attach($image_ids);
        }

        if($request->image_ids && count($request->image_ids)){
            $product->images()->attach($request->image_ids);
        }

        return $product;
    }

    public function getPackages(){
        return Package::all();
    }

    public function getPayments(){
        return Payment::all();
    }

    public function suggestedProductsName($request){
        return Product::where('name', 'like', "%".$request->name."%")->pluck('name');        
    }

    public function imagesByProductName($request){

        $products =  Product::where('name', $request->name)->get();  
        $images = []; 
        $res_images = [];

        foreach($products as $key=>$product){
                $images[] = $product->images;
        }

        foreach($images as $key => $image){
            if($key<6){
                $res_images[] = $image;
            }
        }

         return $res_images;
    }

}
