<x-layout 
    :title="'Technology | Space Tourism'"
    :background="[
        'desktop' => 'images/technology/background-technology-desktop.jpg',
        'tablet'  => 'images/technology/background-technology-tablet.jpg',
        'mobile'  => 'images/technology/background-technology-mobile.jpg',
    ]">

<section class="relative text-white px-6 md:px-10 pt-8 md:pt-16 pb-14">

    <!-- Titre au même niveau que les boutons -->
    <h2 class="font-barlow-condensed text-[20px] tracking-[2.7px] uppercase xl:mb-20 mb-10 xl:text-left text-center">
        <span class="opacity-25 font-bold mr-2">03</span>
        {{ __('messages.titles.technology') }}
    </h2>

    <!-- Conteneur desktop -->
    <div class="xl:flex xl:flex-row xl:items-center xl:justify-between xl:-mt-24">

    <!-- GAUCHE : Boutons + Texte -->
    <div class="xl:flex xl:flex-row xl:items-center xl:gap-20">

        <!-- BOUTONS VERTICAUX (alignés au centre du texte) -->
        <nav class="hidden xl:flex xl:flex-col xl:gap-8 xl:self-center">
            @foreach($technologies as $index => $tech)
                <a href="{{ route(app()->getLocale() . '.technology.show', $tech->id) }}"
                   class="w-20 h-20 flex items-center justify-center rounded-full border border-gray-500 
                          text-white font-bellefair text-3xl transition
                          {{ $technology->id === $tech->id 
                              ? 'bg-white text-black' 
                              : 'hover:bg-gray-400 hover:text-black' }}">
                    {{ $index + 1 }}
                </a>
            @endforeach
        </nav>

        <!-- TEXTE -->
<div class="max-w-[800px] xl:ml-0 xl:-mt-4 text-center xl:text-left">

    <!-- Terminologie -->
    <p class="font-barlow-condensed text-[#D0D6F9] uppercase tracking-[2.36px] mb-2">
        {{ __('messages.technology.terminology') }}
    </p>

    <!-- Titre -->
    <h1 class="font-bellefair text-white uppercase text-[48px] xl:text-[56px] leading-tight mb-4">
        {{ $technology->name }}
    </h1>

    <!-- PARAGRAPHE (le bon, celui du haut) -->
    <p class="font-barlow text-[#D0D6F9] text-[16px] leading-[28px] max-w-[520px]">
        {{ $technology->description }}
    </p>

</div>
    </div>

    <!-- IMAGE PORTRAIT (touchée à droite du texte) -->
    <!-- IMAGE LANDSCAPE (mobile & tablette) -->
<div class="xl:hidden mt-8">
    <img
        src="{{ asset('images/technology/' . $technology->image_landscape) }}"
        alt="{{ $technology->name }}"
        class="w-full h-auto object-cover mx-auto"
    >
</div>

<!-- IMAGE PORTRAIT (desktop seulement) -->
<div class="hidden xl:block xl:-ml-30">
    <img 
        src="{{ asset('images/technology/' . $technology->image_portrait) }}"
        alt="{{ $technology->name }}"
        class="w-[515px] h-[527px] object-contain"
    >
</div>

</div>

</section>

</x-layout>
