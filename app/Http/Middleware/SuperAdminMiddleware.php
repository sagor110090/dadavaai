<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminMiddleware
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
        if ($request->user() && $request->user()->type != 'super_admin')
            {
                return redirect('home')->with('error','You have not admin access');
                
            }
        
        
        
        
        return $next($request);
    }
}
