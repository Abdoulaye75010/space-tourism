<x-layout>
    <x-slot:title>
        Créer une tâche
    </x-slot:title>

    <!-- Message de réussite -->
   @if (session()->has('message'))
    <div style="color: green; font-weight: bold;">
        {{ session('message') }}
    </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        
        <!-- Titre -->
        <div class="mb-4">
            <x-label for="title" label="Titre :" />
            <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded" value="{{ old('title') }}" required>
            <x-error field="title" />
        </div>

        <!-- Détail -->
        <div class="mb-4">
            <x-label for="detail" label="Détail :" />
            <textarea id="detail" name="detail" class="w-full px-3 py-2 border rounded" required>{{ old('detail') }}</textarea>
            <x-error field="detail" />
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Envoyer</button>
    </form>

</x-layout>