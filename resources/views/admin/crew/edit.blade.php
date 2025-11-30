@extends('admin.layout')

@section('title', 'Modifier membre')

@section('content')

<form action="{{ route('admin.crew.update', $crew) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block">Nom :</label>
        <input name="name" value="{{ $crew->name }}" class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block">Rôle :</label>
        <input name="role" value="{{ $crew->role }}" class="border p-2 w-full">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
</form>

@endsection