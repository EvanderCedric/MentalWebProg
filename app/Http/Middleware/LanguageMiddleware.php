<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
    
        $lang = $request->route('lang') ?? Session::get('lang', 'en');
        App::setLocale($lang);
        Session::put('lang', $lang);
        return $next($request);
    }
}
