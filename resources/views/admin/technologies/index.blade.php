@extends('admin.layout')

@section('title', 'Technologies')

@section('content')

<a href="{{ route('admin.technologies.create') }}"
   class="mb-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">
   + Ajouter une technologie
</a>

@if(session('success'))
    <div class="bg-green-200 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
    <tr>
        <th class="p-3 text-left">ID</th>
        <th class="p-3 text-left">Nom</th>
        <th class="p-3 text-left">Actions</th>
    </tr>
    </thead>

    <tbody>
    @foreach($technologies as $tech)
        <tr class="border-b">
            <td class="p-3">{{ $tech->id }}</td>
            <td class="p-3">{{ $tech->name }}</td>
            <td class="p-3">
                <a href="{{ route('admin.technologies.edit', $tech) }}" class="text-blue-500">Modifier</a>

                <form action="{{ route('admin.technologies.destroy', $tech) }}"
                      method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"
                            onclick="return confirm('Supprimer ?')">
                        Supprimer
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
