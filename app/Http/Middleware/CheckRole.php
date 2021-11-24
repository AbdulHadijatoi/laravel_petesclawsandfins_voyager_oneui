<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if($role == 'admin' && auth()->user()->role_id != 1){
            abort(403);
        }

        if($role == 'candidate' && auth()->user()->role_id != 2){
            abort(403);
        }

        if($role == 'investor' && auth()->user()->role_id != 3){
            abort(403);
        }

        if($role == 'partner' && auth()->user()->role_id != 4){
            abort(403);
        }

        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
