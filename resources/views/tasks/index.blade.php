<x-layout>
    <x-slot:title>
        Liste des tâches
    </x-slot:title>

    <div class="container flex justify-center mx-auto relative">
        <div class="flex flex-col w-full">
            <div class="border-b border-gray-200 shadow overflow-x-auto pt-6">
                <div class="flex justify-end mb-4">
                    <x-link-button href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Ajouter une tâche
                    </x-link-button>
                </div>
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-xs text-gray-500">#</th>
                            <th class="px-4 py-2 text-xs text-gray-500">Titre</th>
                            <th class="px-4 py-2 text-xs text-gray-500">Etat</th>
                            <th class="px-4 py-2 text-xs text-gray-500 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($tasks as $task)
                            <tr class="whitespace-nowrap">
                                <td class="px-4 py-4 text-sm text-gray-500">{{ $task->id }}</td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $task->title }}</td>
                                <td class="px-4 py-4">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $task->state ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $task->state ? 'Effectuée' : 'A faire' }}
                                    </span>
                                </td>
                                <td class="px-4 py-4 flex justify-center space-x-2">
                                    <x-link-button href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:text-blue-400">
                                        Voir
                                    </x-link-button>
                                    <x-link-button href="{{ route('tasks.edit', $task->id) }}" class="text-yellow-600 hover:text-yellow-400">
                                        Modifier
                                    </x-link-button>
                                    <x-link-button delete-cursor color="bg-red-600 hover:bg-red-400" onclick="event.preventDefault(); document.getElementById('destroy{{ $task->id }}').submit();">
                                        Supprimer
                                    </x-link-button>
                                    <form id="destroy{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>