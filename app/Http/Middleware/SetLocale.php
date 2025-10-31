<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         $locale = $request->segment(1); // récupère 'fr' ou 'en' depuis l’URL

        if (in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale')); // langue par défaut
        }
        return $next($request);
    }
}
