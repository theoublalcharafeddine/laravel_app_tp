<?php
namespace App\Http\Middleware;

use Closure;

class CheckLangMiddleware
{
    public function handle($request, Closure $next)
    {
        $lang = $request->header('Accept-Language');

        if (strpos($lang, 'fr') !== false) {
            view()->share('languageMessage', 'French');
        } else {
            view()->share('languageMessage', 'Not French');
        }

        return $next($request);
    }
}