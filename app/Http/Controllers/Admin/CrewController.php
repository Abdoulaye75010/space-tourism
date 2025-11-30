<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index()
    {
        return view('admin.crew.index', [
            'crew' => Crew::all()
        ]);
    }

    public function create()
    {
        return view('admin.crew.create');
    }

    public function store(Request $request)
    {
        Crew::create($request->all());
        return redirect()->route('admin.crew.index')->with('success', 'Membre ajouté !');
    }

    public function edit(Crew $crew)
    {
        return view('admin.crew.edit', compact('crew'));
    }

    public function update(Request $request, Crew $crew)
    {
        $crew->update($request->all());
        return redirect()->route('admin.crew.index')->with('success', 'Membre mis à jour !');
    }

    public function destroy(Crew $crew)
    {
        $crew->delete();
        return redirect()->route('admin.crew.index')->with('success', 'Membre supprimé !');
    }
}


