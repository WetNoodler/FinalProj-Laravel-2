<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use function Laravel\Prompts\error;

class Ecomm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $users = User::all();
        $email = $request->email;
        $password = $request->password;

        if( isset($request->uid) ){
            return $request->uid;
        }
        
        $error = null;
        
        foreach ($users as $user){
            if($user->email == $email && $user->password == $password){
                return $response;
            }else if($email != $user->email && isset($password)){
                $error = "ERROR: Email unregistered!";
            }else if(isset($email) && $password == null || isset($password) && $email == null){
                $error = "ERROR: Empty textbox!";
            }else if($user->email == $email && $user->password != $password){
                $error = "ERROR: Wrong password!";
                break;
            }
        }

        return to_route('act14.login', compact('error'));
    }
}
