<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;       // Gère la langue de l’application (setLocale, getLocale)
use Illuminate\Support\Facades\Session;   // Garde en mémoire la langue choisie dans la session utilisateur
use Illuminate\Support\Facades\Redirect;  // Redirige l'utilisateur vers la bonne URL après le changement de langue
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Vérifie que la langue demandée est supportée
        if (!in_array($locale, ['fr', 'en'])) {
            $locale = 'fr'; // Défaut = français
        }

        // Change la langue de l’application pour la requête en cours
        App::setLocale($locale);

        // Enregistre le choix dans la session (persiste après rechargement)
        Session::put('locale', $locale);

        // Redirige vers la même page, mais avec le bon préfixe /fr ou /en
        $previousUrl = url()->previous(); // Récupère l’URL précédente
        // Amélioration : gère les cas où la langue est absente ou à la fin de l’URL
        if (preg_match('/\/(fr|en)(\/|$)/', $previousUrl)) {
            // Si l’URL contient déjà /fr ou /en → on remplace
            $newUrl = preg_replace('/\/(fr|en)(\/|$)/', "/$locale$2", $previousUrl);
        } else {
            // Sinon → on ajoute simplement /fr ou /en à la racine
            $newUrl = url($locale);
        }

        return Redirect::to($newUrl); // Effectue la redirection
    }
}
