@extends('admin.layout')

@section('title', 'Gestion de l’équipage')

@section('content')

<a href="{{ route('admin.crew.create') }}" 
   class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
    + Ajouter un membre
</a>

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Nom</th>
            <th class="p-3">Rôle</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($crew as $member)
        <tr class="border-b">
            <td class="p-3">{{ $member->id }}</td>
            <td class="p-3">{{ $member->name }}</td>
            <td class="p-3">{{ $member->role }}</td>
            <td class="p-3">
                <a href="{{ route('admin.crew.edit', $member) }}" class="text-blue-500">Modifier</a>

                <form action="{{ route('admin.crew.destroy', $member) }}" 
                      method="POST" class="inline">
                      @csrf @method('DELETE')
                      <button class="text-red-500 ml-2">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
