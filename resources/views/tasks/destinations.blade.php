<x-layout 
    :title="'DESTINATIONS | Space Tourism'" 
    :background="[
        'desktop' => 'images/destination/background-destination-desktop.jpg',
        'tablet'  => 'images/destination/background-destination-tablet.jpg',
        'mobile'  => 'images/destination/background-destination-mobile.jpg',
    ]">

    <!-- DESTINATIONS - MOBILE FIRST -->
    <section class="flex flex-col items-center text-center px-6 pt-8 pb-14 space-y-5 overflow-hidden">

        <!-- 01 CHOISISSEZ... (1 ligne, condensé) -->
        <h2 class="font-barlow-condensed text-white text-[16px] tracking-[2.7px] uppercase mt-1 whitespace-nowrap">
            <span class="opacity-25 font-bold mr-2">01</span>
            Choisissez votre destination
        </h2>

        <!-- Image planète -->
        <img
          src="{{ asset('images/destination/' . $planet['image']) }}"
          alt="{{ $planet['title'] }}"
          class="w-[170px] h-[170px] object-contain mt-1"
        />

        <!-- Onglets planètes (condensé) -->
        <nav class="mt-2 mb-1 flex items-center justify-center gap-6 font-barlow-condensed uppercase tracking-[2.7px] text-[14px] text-[#D0D6F9]">
            @foreach ($planets as $key => $p)
                @php $active = $planet['title'] === $p['title']; @endphp
                <a href="{{ route('destinations', ['planet' => $key]) }}"
                   class="pb-2 {{ $active ? 'text-white border-b-2 border-white' : 'hover:text-white/80 border-b-2 border-transparent hover:border-white/40' }}">
                    {{ $p['title'] }}
                </a>
            @endforeach
        </nav>

        <!-- Nom planète (Bellefair serif) -->
        <h1 class="font-bellefair text-white uppercase text-[56px] leading-[64px] mt-1">
            {{ $planet['title'] }}
        </h1>

        <!-- Description (Barlow) -->
        <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[25px] max-w-[327px] mx-auto">
            {{ $planet['description'] }}
        </p>

        <!-- Séparateur -->
        <hr class="w-full max-w-[327px] border-[#383B4B] my-6">

        <!-- Distance / Durée -->
        <div class="flex flex-col items-center gap-6">
            <div>
                <p class="font-barlow-condensed uppercase text-[14px] tracking-[2.36px] text-[#D0D6F9] mb-2">Distance</p>
                <p class="font-bellefair text-white text-[28px] uppercase">{{ $planet['distance'] }}</p>
            </div>
            <div>
                <p class="font-barlow-condensed uppercase text-[14px] tracking-[2.36px] text-[#D0D6F9] mb-2">Durée</p>
                <p class="font-bellefair text-white text-[28px] uppercase">{{ $planet['duration'] }}</p>
            </div>
        </div>
    </section>
</x-layout>
