<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Affiche la liste de toutes les destinations.
     */
    public function index()
    {
        $planets = Planet::all();
        return view('destinations.index', compact('planets'));
    }

    /**
     * Affiche une destination spécifique.
     */
    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return view('destinations.show', compact('planet'));
    }
}
