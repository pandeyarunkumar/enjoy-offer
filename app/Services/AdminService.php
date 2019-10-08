<?php

namespace App\Services;

use App\User;
use App\Category;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Carbon\Carbon;
use App\Image;

class AdminService extends MasterService
{
    public function signIn(Request $request){
        $email = $request->email;
        $password = $request->password;

        $admin = user::where('email', $email)->first();
        if(!$admin){
            return 0;                        
        }

        if(!\Hash::check($password, $admin->password)){
            return 0;            
        }

        $res_admin = new \StdClass();
        $res_admin->id = $admin->id;
        $res_admin->name = $admin->name;
        $res_admin->email = $admin->email;
        $res_admin->mobile = $admin->mobile;

        $expireDate=Carbon::now()->addHours(24)->timestamp;
        $res_admin->exp = $expireDate;  

        $jwt = JWT::encode($res_admin, "jwtToken");        
        $res_admin->jwtToken = $jwt;

        return $res_admin; 
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);

        $icon = $request->icon;

        if($request->icon){
            $res_icon = $this->saveImage($icon);
            $category->icon = $res_icon->id;
        }
        

        $image = $request->image;
        
        if($image){
            $res_image = $this->saveImage($image);
            $category->image = $res_image->id;
        }

        if($request->parent_category_id){
            $parent = Category::find($request->parent_category_id);
            if(!$parent){
                return 0;
            }
        }
        
        $category->parent_category_id = $request->parent_category_id;

        $category->save();
        return $category;
    }

    public function getCategories(){
        $categories = Category::where('parent_category_id', null)->get();
        return $categories;
        
    }

    public function saveProductImages($request){

        if($request->images && count($request->images)){

            foreach($request->images as $image){

                $ext = $image->guessExtension();
                $file_name    =    "enjoy-offer-image-".Carbon::now()."-".uniqid().".{$ext}";
                $file_url    =    "storage/images/";
                $image->move($file_url, $file_name);
        
                $img = new Image();
                $img->url = $file_url.$file_name;
                $img->uploaded_by_admin = 1;
                $img->save();

                if(!$img){
                    return 0;
                }
            }

            return 1;
        }

    }
}
