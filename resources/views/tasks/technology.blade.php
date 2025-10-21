<x-layout 
    :title="'TECHNOLOGIES | Tourisme Spatial'"
    :description="'Découvrez les technologies qui rendent le voyage spatial possible.'"
    :background="'images/technology/background-technology-desktop.jpg'">

    {{-- 🪐 Étape 1 — Titre principal tout en haut --}}
    <div class="flex justify-center md:justify-start w-full -mt-0 md:mt-4">
        <h2 class="uppercase tracking-[4px] text-sm md:text-base text-white">
            <span class="opacity-25 font-bold">03</span>
            <span class="opacity-100 ml-3">LE LANCEUR SPATIAL 101</span>
        </h2>
    </div>

    {{-- 🧩 Étape 2 — Section principale --}}
    <section class="flex flex-col items-center text-center px-0 md:px-20 text-white mt-6">

        {{-- 🚀 Image responsive (pleine largeur mobile) --}}
        <div class="w-full mb-4 md:mb-8">
            <picture>
                {{-- Image mobile (landscape) --}}
                <source 
                    media="(max-width: 768px)" 
                    srcset="{{ asset(str_replace('portrait', 'landscape', $selected['image'])) }}">
                
                {{-- Image desktop (portrait) --}}
                <img 
                    src="{{ asset($selected['image']) }}" 
                    alt="{{ $selected['name'] }}"
                    class="block w-screen h-[170px] md:w-auto md:h-[527px] object-cover md:rounded-lg"
                >
            </picture>
        </div>

        {{-- 🔘 Étape 3 — Boutons de navigation (espacement réduit) --}}
        <div class="flex justify-center space-x-4 md:space-x-6 mb-4">
            @php $i = 1; @endphp
            @foreach($technologies as $key => $t)
                <a href="{{ route('technology', $key) }}" 
                   class="w-12 h-12 rounded-full border-2 font-bold flex items-center justify-center transition duration-300 mt-2
                          {{ $tech === $key 
                            ? 'bg-white text-black border-white' 
                            : 'text-white border-gray-500 hover:bg-gray-500 hover:text-black' }}">
                    {{ $i++ }}
                </a>
            @endforeach
        </div>

        {{-- 🧠 Étape 4 — Texte descriptif --}}
        <div class="space-y-2 mb-10 max-w-md mt-2">
            <p class="uppercase text-gray-400 tracking-[2px] text-sm">La terminologie…</p>
            <h1 class="text-4xl md:text-5xl font-bellefair uppercase">{{ $selected['name'] }}</h1>
            <p class="text-gray-300 leading-relaxed mt-4">
                {{ $selected['description'] }}
            </p>
        </div>
    </section>
</x-layout>