<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;
        
       

        foreach ($guards as $guard) {           
            if (Auth::guard($guard)->check()) {
                
                // return redirect(RouteServiceProvider::HOME);
                if($guard==='admin'){
                   
                    return redirect()->route('home.dashbord');
                }else if($guard==='artisan'){
                   
                    return redirect()->route('home.home');
                }else if($guard==='client'){
                    
                    return redirect()->route('home.dashClient');
                }
            }
            
        }

    // public function handle(Request $request, Closure $next)
    // {
    //     $user= $request->user();
        
        
    //     if($user instanceof User){          
    //         $user->forceFill([
    //             'last_active_at'=> Carbon::now(),
    //         ])->save();
    //     }
        
        return $next($request);   
        // return redirect()->back();
        
    }
}
