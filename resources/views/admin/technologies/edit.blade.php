@extends('admin.layout')

@section('title', 'Modifier une technologie')

@section('content')

<form action="{{ route('admin.technologies.update', $technology) }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded shadow max-w-xl">

    @csrf
    @method('PUT')

    <!-- Nom -->
    <label class="block mb-3">
        <span class="font-semibold">Nom</span>
        <input type="text" name="name"
               value="{{ old('name', $technology->name) }}"
               class="w-full border px-3 py-2 rounded">
    </label>

    <!-- Description -->
    <label class="block mb-3">
        <span class="font-semibold">Description</span>
        <textarea name="description"
                  class="w-full border px-3 py-2 rounded">{{ old('description', $technology->description) }}</textarea>
    </label>

    <!-- IMAGE LANDSCAPE -->
    <label class="block mb-3">
        <span class="font-semibold">Image Landscape</span>

        @if($technology->image_landscape)
            <img src="{{ asset('images/technology/' . $technology->image_landscape) }}"
                 class="w-40 mb-2">
        @endif

        <input type="file" name="image_landscape"
               class="w-full border px-3 py-2 rounded">
    </label>

    <!-- IMAGE PORTRAIT -->
    <label class="block mb-3">
        <span class="font-semibold">Image Portrait</span>

        @if($technology->image_portrait)
            <img src="{{ asset('images/technology/' . $technology->image_portrait) }}"
                 class="w-40 mb-2">
        @endif

        <input type="file" name="image_portrait"
               class="w-full border px-3 py-2 rounded">
    </label>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Mettre à jour
    </button>

</form>

@endsection
