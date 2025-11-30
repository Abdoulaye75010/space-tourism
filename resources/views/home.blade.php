<x-layout 
    :title="'ACCUEIL | Space Tourism'"
    :description="'Découvrez Space Tourism et préparez-vous pour un voyage spatial unique.'"
    :background="[
        'desktop' => 'images/home/background-home-desktop.jpg',
        'tablet'  => 'images/home/background-home-tablet.jpg',
        'mobile'  => 'images/home/background-home-mobile.jpg',
    ]">

    <!-- SECTION ACCUEIL - VERSION MOBILE FIRST -->
    <section class="
    flex flex-col items-center justify-center text-center 
    px-6 md:px-10 pt-2 md:pt-[150px] pb-10 space-y-8 text-white
    lg:flex-row lg:items-end lg:text-left lg:space-y-0 lg:space-x-32 lg:justify-between">

    <!-- Bloc texte -->
    <div class="
        flex flex-col items-center justify-center 
        max-w-[327px] md:max-w-[450px]
        lg:items-start lg:text-left lg:max-w-[500px]
    ">

        <!-- Petit titre -->
        <h5 class="
            font-barlow-condensed text-[#D0D6F9] uppercase 
            text-[16px] leading-[19px] tracking-[2.7px] mb-3
            md:text-[20px] md:leading-[24px]
            text-center lg:text-left
        ">
            {{ __('messages.titles.home') }}
        </h5>

        <!-- Grand titre -->
        <h1 class="
            font-bellefair text-white uppercase 
            text-[80px] md:text-[150px] lg:text-[150px]
            leading-[90px] md:leading-[150px] lg:leading-[150px]
            mb-4 whitespace-nowrap
            text-center lg:text-left
        ">
            {{ __('messages.titles.space') }}
        </h1>

        <!-- Paragraphe -->
        <p class="
            font-barlow text-[#D0D6F9] 
            text-[15px] leading-[22px] 
            md:text-[16px] md:leading-[28px]
            text-center lg:text-left
        ">
            {{ __('messages.texts.home') }}
        </p>
    </div>

        <!-- Bouton Explorer -->
        <div class="relative flex items-center justify-center group mt-4">

            <a href="{{ route(app()->getLocale() . '.destinations.index') }}" 
            class="flex items-center justify-center w-[150px] h-[150px] md:w-[242px] md:h-[242px] rounded-full bg-white text-[#0B0D17] font-bellefair text-[20px] md:text-[32px] uppercase">
               {{ __('messages.buttons.explore') }}
            </a>

            <!-- Cercles hover -->
            <div class="absolute w-[230px] h-[230px] rounded-full bg-white/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
        </div>
    </section>

</x-layout>
