<?php

namespace App\Http\Middleware;

use Browser;
use Closure;

class IsMobile
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
        if(Browser::isMobile()) {
            return redirect('http://m.covid19zim.online');
        }

        return $next($request);
    }
}
