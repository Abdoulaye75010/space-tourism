@extends('admin.layout')

@section('title', 'Ajouter une planète')

@section('content')

<form action="{{ route('admin.planets.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label>Nom (admin)</label>
        <input type="text" name="name" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Nom FR</label>
        <input type="text" name="name_fr" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Nom EN</label>
        <input type="text" name="name_en" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Description FR</label>
        <textarea name="description_fr" class="w-full p-2 border rounded"></textarea>
    </div>

    <div>
        <label>Description EN</label>
        <textarea name="description_en" class="w-full p-2 border rounded"></textarea>
    </div>

    <div>
        <label>Distance</label>
        <input type="text" name="distance" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Durée</label>
        <input type="text" name="duration" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Nom de l'image (ex: image-moon.webp)</label>
        <input type="text" name="image" class="w-full p-2 border rounded">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Enregistrer</button>
</form>

@endsection
