<x-layout 
    :title="'Technologies | Space Tourism'"
    :background="[
        'desktop' => 'images/technology/background-technology-desktop.jpg',
        'tablet' => 'images/technology/background-technology-tablet.jpg',
        'mobile' => 'images/technology/background-technology-mobile.jpg',
    ]">

    <section class="text-center text-white py-10">
        <h1 class="text-3xl font-bellefair mb-8">{{ __('messages.titles.technology')}}</h1>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($technologies as $tech)
                <div class="bg-gray-900 p-6 rounded-xl shadow">
                    <img src="{{ asset('images/technology/' . $tech->image) }}" 
                         alt="{{ $tech->name }}" 
                         class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-bellefair mb-2">{{ $tech->name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $tech->description }}</p>
                </div>
            @endforeach
        </div>
    </section>

</x-layout>