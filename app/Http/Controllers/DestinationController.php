<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Affiche la liste de toutes les destinations.
     */
    // public function index()
    // {
    //     $planets = Planet::all();
    //     return view('destinations.index', compact('planets'));
    // }

    /**
     * Nouvelle version de la méthode index()
     */
    public function index()
    {
        // On récupère toutes les planètes
        $planets = Planet::all();

        // On prend la première planète comme "par défaut"
        $planet = $planets->first();

        // On envoie à la vue les données
        return view('destinations.index', compact('planet', 'planets'));
    }

    /**
     * Affiche une destination spécifique.
     */
    public function show($id)
    {
        $planet = Planet::findOrFail($id); // requête qui récupère la planète correspondant à l'ID
        $planets = Planet::get(['id', 'name']); // récupère toutes les planètes (id + name uniquement)

        return view('destinations.index', compact(['planet', 'planets']));
    }
}
