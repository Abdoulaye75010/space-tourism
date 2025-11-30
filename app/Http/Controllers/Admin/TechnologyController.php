<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        return view('admin.technologies.index', [
            'technologies' => Technology::all()
        ]);
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'nullable|string',
            'image_portrait'    => 'nullable|image|mimes:jpeg,png,webp',
            'image_landscape'   => 'nullable|image|mimes:jpeg,png,webp',
        ]);

        $data = $request->only(['name', 'description']);

        // Upload portrait
        if ($request->hasFile('image_portrait')) {
            $data['image_portrait'] = $request->file('image_portrait')
                ->store('technologies/portrait', 'public');
        }

        // Upload landscape
        if ($request->hasFile('image_landscape')) {
            $data['image_landscape'] = $request->file('image_landscape')
                ->store('technologies/landscape', 'public');
        }

        Technology::create($data);

        return redirect()
            ->route('admin.technologies.index')
            ->with('success', 'Technologie ajoutée !');
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'nullable|string',
            'image_portrait'    => 'nullable|image|mimes:jpeg,png,webp',
            'image_landscape'   => 'nullable|image|mimes:jpeg,png,webp',
        ]);

        $data = $request->only(['name', 'description']);

        // Replace portrait
        if ($request->hasFile('image_portrait')) {
            $data['image_portrait'] = $request->file('image_portrait')
                ->store('technologies/portrait', 'public');
        }

        // Replace landscape
        if ($request->hasFile('image_landscape')) {
            $data['image_landscape'] = $request->file('image_landscape')
                ->store('technologies/landscape', 'public');
        }

        $technology->update($data);

        return redirect()
            ->route('admin.technologies.index')
            ->with('success', 'Technologie mise à jour !');
    }

    public function destroy(Technology $technology)
    {
        $technology->delete();

        return redirect()
            ->route('admin.technologies.index')
            ->with('success', 'Technologie supprimée !');
    }
}
