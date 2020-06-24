<?php

namespace App\Http\Middleware;

use App\Country;
use Closure;

class VerifyCountryCount
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
        if(Country::count() == 0) {
            session()->flash('error', 'add country inorder to add provinces');

            return redirect(route('countries.index'));
        }
        return $next($request);
    }
}
