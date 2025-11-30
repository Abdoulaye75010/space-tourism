@extends('admin.layout')

@section('title', 'Ajouter une technologie')

@section('content')

<form action="{{ route('admin.technologies.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow max-w-xl">

    @csrf

    <!-- Nom -->
    <label class="block mb-3">
        <span class="font-semibold">Nom</span>
        <input type="text" name="name"
               class="w-full border px-3 py-2 rounded"
               value="{{ old('name') }}">
    </label>

    <!-- Description -->
    <label class="block mb-3">
        <span class="font-semibold">Description</span>
        <textarea name="description"
                  class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
    </label>

    <!-- IMAGE LANDSCAPE -->
    <label class="block mb-3">
        <span class="font-semibold">Image Landscape</span>
        <input type="file" name="image_landscape"
               class="w-full border px-3 py-2 rounded">
    </label>

    <!-- IMAGE PORTRAIT -->
    <label class="block mb-3">
        <span class="font-semibold">Image Portrait</span>
        <input type="file" name="image_portrait"
               class="w-full border px-3 py-2 rounded">
    </label>

    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Enregistrer
    </button>
</form>

@endsection
