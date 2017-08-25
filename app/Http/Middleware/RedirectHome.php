<?php

namespace App\Http\Middleware;

use Closure;

class RedirectHome
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
        if ($request->route()->getName() == 'home') {
            return redirect()->route('users.all');
        }
        
        return $next($request);
    }
}
