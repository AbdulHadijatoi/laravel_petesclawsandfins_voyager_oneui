<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
 
class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        if(auth()->user()->role_id == 1){
            $home = '/dashboard';
        }else if(auth()->user()->role_id == 3){
            $home = 'investor/welcome';
            // investor
        }else if(auth()->user()->role_id == 4){
            $home = 'partner/welcome';
            // partner
        }else{
            $home = 'candidate/welcome';
            // candidate
        }
        return redirect()->intended($home);
    }
}