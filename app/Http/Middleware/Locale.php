<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{

    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if ($request->segment(1) == 'fr') {
            app()->setLocale('fr');
        } else {
            app()->setLocale('nl');
        }

        $response = $next($request);

        return $response;
    }

}
