<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index()
    {
        $crews = Crew::all();

        // Si la table est vide, on retourne une vue spéciale
        if ($crews->isEmpty()) {
            return view('crew.index', ['crew' => null, 'crews' => []]);
        }

        $crew = $crews->first(); // Premier membre par défaut
        return view('crew.index', compact('crew', 'crews'));

        dd($crew, $crews);
    }

    public function show($id)
    {
        $crews = Crew::all();
        $crew = Crew::findOrFail($id);
        return view('crew.index', compact('crew', 'crews'));
    }
}
