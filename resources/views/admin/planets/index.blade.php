@extends('admin.layout')

@section('title', 'Gestion des planètes')

@section('content')

<a href="{{ route('admin.planets.create') }}"
    class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
    + Ajouter une planète
</a>

@if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3 text-left">Nom</th>
            <th class="p-3 text-left">Distance</th>
            <th class="p-3 text-left">Durée</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>

    <tbody>
    @foreach($planets as $planet)
        <tr class="border-b">
            <td class="p-3">{{ $planet->name_fr }}</td>
            <td class="p-3">{{ $planet->distance }}</td>
            <td class="p-3">{{ $planet->duration }}</td>

            <td class="p-3 flex space-x-3">
                <a href="{{ route('admin.planets.edit', $planet) }}" class="text-blue-500">Modifier</a>

                <form action="{{ route('admin.planets.destroy', $planet) }}" method="POST"
                      onsubmit="return confirm('Supprimer cette planète ?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
