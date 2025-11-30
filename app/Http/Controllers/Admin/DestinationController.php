<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class DestinationController extends Controller
{
    public function index()
    {
        // Récupère la langue actuelle (fr ou en)
        $locale = app()->getLocale();

        // Sélectionne dynamiquement les colonnes selon la langue
        $planets = Planet::select(
            'id',
            'image',
            "name_{$locale} as name",
            "description_{$locale} as description",
            "distance_{$locale} as distance",
            "duration_{$locale} as duration"
        )->get();

        // 🌙 Prend la première planète comme affichage par défaut
        $planet = $planets->first();

        // Envoie les données à la vue
        return view('destinations.index', compact('planets', 'planet'));
    }

    public function show($id)
    {
        $locale = app()->getLocale();

        // 🔹 Récupère la planète cliquée
        $planet = Planet::select(
            'id',
            'image',
            "name_{$locale} as name",
            "description_{$locale} as description",
            "distance_{$locale} as distance",
            "duration_{$locale} as duration"
        )->findOrFail($id);

        // 🔹 Récupère aussi la liste de toutes les planètes (pour le menu)
        $planets = Planet::select(
            'id',
            "name_{$locale} as name"
        )->get();

        // 🔹 Retourne la même vue avec la planète sélectionnée
        return view('destinations.index', compact('planet', 'planets'));
    }
}
