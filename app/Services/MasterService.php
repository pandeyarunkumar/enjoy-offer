<?php

namespace App\Services;

use App\Image;
use Carbon\Carbon;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;


class MasterService
{
   
    public function saveImage($data)
    {
        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif
        
            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                throw new \Exception('invalid image type');
            }
        
            $data = base64_decode($data);
        
            if ($data === false) {
                throw new \Exception('base64_decode failed');
            }
        } else {
            throw new \Exception('did not match data URI with image data');
        }

        $url = "storage/images/enjoy-offer-image".Carbon::now().uniqid(). "." . $type;
        
        file_put_contents($url, $data);
         
        $img = new Image();
        $img->url = $url;
        $img->save();
        return $img;
    }

    public function sendSms($SentTo, $message)
    {

        $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
        $authToken  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
        $appSid     = config('app.twilio')['TWILIO_APP_SID'];
        $client = new Client($accountSid, $authToken);
        try
        {
            $client->messages->create($SentTo,
            array(
            'from' => '+19282385151',
            'body' => $message
            )
            );
        }
        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();
        }

        // $MESSAGE = $message;
        // $SENTTO = rawurlencode($SentTo);    

        // $CLIENTID = env('CLIENTID');
        // $APIKEY = env('APIKEY');
        // $SENDERID = env('SENDERID');
        // $agent = env('AGENT'); 

        // $url = "http://textsmsapp.com/vendorsms/pushsms.aspx?clientid=$CLIENTID&apikey=$APIKEY&msisdn=$SENTTO&sid=$SENDERID&msg=$MESSAGE&fl=0&gwid=2";
        // $ch = \curl_init();
        // \curl_setopt($ch, CURLOPT_URL, $url);
        // \curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // \curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        // $status = \curl_exec($ch);
        // \curl_close($ch);
        
        // return $status;
    }
}
