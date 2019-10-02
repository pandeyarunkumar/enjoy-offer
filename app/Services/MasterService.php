<?php

namespace App\Services;

use App\Image;
use Carbon\Carbon;


class MasterService
{
   
    public function saveImage($image)
    {
     
    // $base64 = $image;
    // $image = str_replace('data:image/png;base64,', '', $base64);
    // $image = str_replace(' ', '+', $image);

    // $pos  = strpos($base64, ';');
    // $ext = explode(':', substr($base64, 0, $pos))[1];
    // $ext = explode('/', substr($ext, 0, $pos))[1];

    // $imageName    =    "enjoy-offer-image-".Carbon::now()."-".uniqid().".{$ext}";
    // $file_url    =    "storage/images/";

    // \File::put($file_url . $imageName, base64_decode($base64)); 
    
        $ext = $image->guessExtension();
        $file_name    =    "enjoy-offer-image-".Carbon::now()."-".uniqid().".{$ext}";
        $file_url    =    "storage/images/";
        $image->move($file_url, $file_name);

        $img = new Image();
        $img->url = $file_url.$file_name;
        $img->save();
        return $img;
    }

    public function sendSms($SentTo, $message)
    {

        $MESSAGE = $message;
        $SENTTO = rawurlencode($SentTo);    

        $CLIENTID = env('CLIENTID');
        $APIKEY = env('APIKEY');
        $SENDERID = env('SENDERID');
        $agent = env('AGENT'); 

        $url = "http://textsmsapp.com/vendorsms/pushsms.aspx?clientid=$CLIENTID&apikey=$APIKEY&msisdn=$SENTTO&sid=$SENDERID&msg=$MESSAGE&fl=0&gwid=2";
        $ch = \curl_init();
        \curl_setopt($ch, CURLOPT_URL, $url);
        \curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        \curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        $status = \curl_exec($ch);
        \curl_close($ch);
        
        return $status;
    }
}
