<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });





Route::get('get-categories', 'AdminController@getcategories'); 
Route::get('get-subCategories', 'AdminController@getSubcategories'); 
Route::get('get-stores', 'StoreController@getStores'); 
Route::get('get-products', 'StoreController@getProducts'); 
Route::get('get-store-reviews', 'StoreController@getReviews'); 
Route::get('get-store-rating', 'StoreController@getRating'); 
Route::get('get-banners', 'StoreController@getBanners'); 


Route::post('seller/sign-in', 'LoginController@signIn');
Route::post('seller/generate-otp', 'LoginController@generateOtp');   
Route::post('seller/sign-up', 'LoginController@signUp');
Route::group(['middleware' => "authenticate"], function () {
    Route::post('seller/update-profile', 'LoginController@updateProfile');   
    Route::get('seller/get-images', 'StoreController@getImages'); 
    Route::post('seller/save-store', 'StoreController@saveStore');
    Route::post('seller/update-store', 'StoreController@updateStore');
    Route::post('seller/disable-store', 'StoreController@disableStore');
    Route::post('seller/save-product', 'StoreController@saveProduct');
    Route::post('seller/save-product-content', 'StoreController@saveProductContent');
    Route::post('seller/save-product-images', 'StoreController@saveProductImages');
    Route::post('seller/update-product', 'StoreController@updateProduct');
    Route::get('seller/get-stores', 'StoreController@getSellerStores'); 
    Route::get('seller/get-products', 'StoreController@getSellerProducts'); 
    Route::post('seller/delete-product', 'StoreController@deleteProduct'); 
    Route::get('seller/search-products', 'StoreController@searchProducts'); 
    Route::get('seller/get-packages', 'StoreController@getPackages'); 
    Route::get('seller/get-payments', 'StoreController@getPayments');
    Route::get('seller/suggested-products-name', 'StoreController@suggestedProductsName'); 
    Route::get('seller/images-by-product-name', 'StoreController@imagesByProductName'); 
    Route::post('seller/buy-package', 'StoreController@buyPackage'); 
});

Route::post('buyer/sign-in', 'BuyerController@signIn');
Route::post('buyer/generate-otp', 'BuyerController@generateOtp');   
Route::post('buyer/sign-up', 'BuyerController@signUp');
Route::get('get-hot-sellers', 'BuyerController@storesNearBYMe');
Route::get('get-banners-for-buyer', 'BuyerController@getBanners');
Route::group(['middleware' => "checkBuyer"], function () {
    Route::post('buyer/update-profile', 'BuyerController@updateProfile');      
});

Route::post('admin/sign-in', 'AdminController@signIn');    
Route::group(['middleware' => "checkAdmin"], function () {
    Route::post('admin/save-category', 'AdminController@saveCategory');
    Route::post('admin/save-product-images', 'AdminController@saveProductImages');
});



