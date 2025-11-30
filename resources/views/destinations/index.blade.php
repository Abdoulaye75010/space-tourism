<x-layout 
    :title="'DESTINATIONS | Space Tourism'" 
    :background="[
        'desktop' => 'images/destination/background-destination-desktop.jpg',
        'tablet'  => 'images/destination/background-destination-tablet.jpg',
        'mobile'  => 'images/destination/background-destination-mobile.jpg',
    ]">

    <section class="px-6 md:px-16 pt-8 md:pt-16 pb-14 lg:pt-20 text-white">

    <!-- TITRE DE PAGE -->
    <h2 class="font-barlow-condensed text-[16px] md:text-[20px] tracking-[2.7px] uppercase 
               text-center md:text-left mb-8">
        <span class="opacity-25 font-bold mr-2">01</span>
        {{ __('messages.titles.destinations') }}
    </h2>

    <!-- FLEX DESKTOP : IMAGE + TEXTE -->
    <div class="flex flex-col items-center 
                lg:flex-row lg:items-center lg:justify-between lg:gap-32">

        <!-- IMAGE PLANÈTE -->
        <img src="{{ asset('images/destination/' . $planet->image) }}"
             alt="{{ $planet->name }}"
             class="w-[170px] h-[170px] md:w-[300px] md:h-[300px] 
                    lg:w-[445px] lg:h-[445px] object-contain mb-8 lg:mb-0 lg:mt-10" />

        <!-- TEXTE + TABS -->
        <div class="flex flex-col items-center text-center 
                    lg:items-start lg:text-left max-w-[573px] lg:mt-10">

            <!-- TABS NAVIGATION -->
            <nav class="flex gap-6 font-barlow-condensed uppercase 
                        text-[14px] tracking-[2.36px] text-[#D0D6F9] mb-5">
                @foreach($planets as $p)
                    <a href="{{ route(app()->getLocale() . '.destinations.show', ['id' => $p->id]) }}"
                       class="{{ $p->id === $planet->id ? 'text-white border-b-2 border-white pb-2' : '' }}">
                       {{ $p->name }}
                    </a>
                @endforeach
            </nav>

            <!-- TITRE PLANÈTE -->
            <h1 class="font-bellefair text-[56px] leading-[64px] 
                       md:text-[80px] md:leading-[92px] 
                       lg:text-[100px] lg:leading-[110px] uppercase mb-4">
                {{ $planet->name }}
            </h1>

            <!-- DESCRIPTION -->
            <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[25px]
                      md:text-[16px] md:leading-[28px] mb-8 max-w-[450px]">
                {{ $planet->description }}
            </p>

            <!-- SEPARATEUR -->
            <hr class="w-full border-[#383B4B] mb-6">

            <!-- DISTANCE + DUREE -->
            <div class="flex flex-col md:flex-row md:gap-20 gap-8">

                <div>
                    <p class="font-barlow-condensed uppercase text-[14px] tracking-[2px] text-[#D0D6F9] mb-2">
                        {{ __('messages.destinations.distance') }}
                    </p>
                    <p class="font-bellefair text-[28px] uppercase">
                        {{ $planet->distance }}
                    </p>
                </div>

                <div>
                    <p class="font-barlow-condensed uppercase text-[14px] tracking-[2px] text-[#D0D6F9] mb-2">
                        {{ __('messages.destinations.duration') }}
                    </p>
                    <p class="font-bellefair text-[28px] uppercase">
                        {{ $planet->duration }}
                    </p>
                </div>

            </div>

        </div> <!-- FIN TEXTE -->
    </div> <!-- FIN FLEX -->
</section>

</x-layout>
