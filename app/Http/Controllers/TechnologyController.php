<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    // Affiche toutes les technologies
    public function index()
    {
        $technologies = Technology::all();
      
        return view('technology.index', compact('technologies'));
    }

    // Affichage par id
    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technology.show', compact('technology'));
    }
}

