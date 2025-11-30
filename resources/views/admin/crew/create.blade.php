@extends('admin.layout')

@section('title', 'Ajouter un membre')

@section('content')

<form action="{{ route('admin.crew.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label class="block">Nom :</label>
        <input name="name" class="border p-2 w-full">
    </div>

    <div class="mb-4">
        <label class="block">Rôle :</label>
        <input name="role" class="border p-2 w-full">
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
</form>

@endsection
