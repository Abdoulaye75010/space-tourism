@extends('admin.layout')

@section('title', 'Modifier : ' . $planet->name_fr)

@section('content')

<form action="{{ route('admin.planets.update', $planet) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label>Nom (admin)</label>
        <input type="text" name="name" value="{{ $planet->name }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Nom FR</label>
        <input type="text" name="name_fr" value="{{ $planet->name_fr }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Nom EN</label>
        <input type="text" name="name_en" value="{{ $planet->name_en }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Description FR</label>
        <textarea name="description_fr" class="w-full p-2 border rounded">{{ $planet->description_fr }}</textarea>
    </div>

    <div>
        <label>Description EN</label>
        <textarea name="description_en" class="w-full p-2 border rounded">{{ $planet->description_en }}</textarea>
    </div>

    <div>
        <label>Distance</label>
        <input type="text" name="distance" value="{{ $planet->distance }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Durée</label>
        <input type="text" name="duration" value="{{ $planet->duration }}" class="w-full p-2 border rounded">
    </div>

    <div>
        <label>Image</label>
        <input type="text" name="image" value="{{ $planet->image }}" class="w-full p-2 border rounded">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
</form>

@endsection
