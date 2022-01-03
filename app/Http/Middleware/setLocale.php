<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class setLocale
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
        $languages = config('app.languages');
        if (session('language')) {
            $language = session('language');
            if (in_array($language, $languages)) {
                session()->put('language', $language);
                app()->setLocale($language);
            }
        }
        return $next($request);
    }
}