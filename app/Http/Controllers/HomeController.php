<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($locale = null)
    {
        // Si la langue est dans l’URL, on l’applique
        if ($locale && in_array($locale, ['fr', 'en'])) {
            App::setLocale($locale);
        }

        return view('home');
    }
}
