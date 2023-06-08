<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $countries = ['us', 'uk', 'vn'];

        if (!in_array($request->country, $countries) && !$request->is('notsupport')) {
            return redirect()->route('notsupport');
        }
        return $next($request);
    }
}
