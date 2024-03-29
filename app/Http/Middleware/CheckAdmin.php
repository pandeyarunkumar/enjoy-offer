<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use App\User;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $decoded = JWT::decode($request->bearerToken(), "jwtToken", array('HS256'));
            $user = User::findOrFail($decoded->id);

            if($user->role != "super_admin"){
                return response()->json(['status' => 0, 'message' => 'Unauthorized request.'], 401);              
            }

            $request->user = $user;
            return $next($request);            
        }
        
        catch(\Exception $e){   
            return response()->json(['status' => 0, 'message' => 'Unauthorized request.'], 401);            
        }
    }
}
