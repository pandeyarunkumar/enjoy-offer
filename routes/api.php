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

Route::post('seller/sign-in', 'LoginController@signIn');
Route::post('seller/generate-otp', 'LoginController@generateOtp');   
Route::post('seller/sign-up', 'LoginController@signUp');
Route::post('admin/sign-in', 'AdminController@signIn');         
Route::get('get-categories', 'AdminController@getcategories'); 

Route::group(['middleware' => "authenticate"], function () {
    Route::post('seller/save-store', 'StoreController@saveStore');
});

Route::group(['middleware' => "checkAdmin"], function () {
    Route::post('save-category', 'AdminController@saveCategory');
});

