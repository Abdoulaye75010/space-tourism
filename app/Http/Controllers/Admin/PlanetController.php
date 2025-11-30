<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // LISTE
    public function index()
    {
        return view('admin.planets.index', [
            'planets' => Planet::all()
        ]);
    }

    // FORM CREATE
    public function create()
    {
        return view('admin.planets.create');
    }

    // INSERT BD
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string',
            'name_fr' => 'nullable|string',
            'name_en' => 'nullable|string',

            'description' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',

            'distance' => 'nullable|string',
            'duration' => 'nullable|string',

            'image' => 'nullable|string',
        ]);

        Planet::create($data);

        return redirect()->route('admin.planets.index')
            ->with('success', 'Planète créée avec succès !');
    }

    // FORM EDIT
    public function edit(Planet $planet)
    {
        return view('admin.planets.edit', compact('planet'));
    }

    // UPDATE BD
    public function update(Request $request, Planet $planet)
    {
        $data = $request->validate([
            'name' => 'nullable|string',
            'name_fr' => 'nullable|string',
            'name_en' => 'nullable|string',

            'description' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',

            'distance' => 'nullable|string',
            'duration' => 'nullable|string',

            'image' => 'nullable|string',
        ]);

        $planet->update($data);

        return redirect()->route('admin.planets.index')
            ->with('success', 'Planète mise à jour !');
    }

    // DELETE
    public function destroy(Planet $planet)
    {
        $planet->delete();

        return redirect()->route('admin.planets.index')
            ->with('success', 'Planète supprimée !');
    }
}
