<x-layout 
    :title="'ACCUEIL | Space Tourism'"
    :description="'Découvrez Space Tourism et préparez-vous pour un voyage spatial unique.'"
    :background="[
        'desktop' => 'images/home/background-home-desktop.jpg',
        'tablet'  => 'images/home/background-home-tablet.jpg',
        'mobile'  => 'images/home/background-home-mobile.jpg',
    ]">

    <!-- SECTION ACCUEIL - VERSION MOBILE FIRST -->
    <section class="flex flex-col items-center justify-between min-h-[calc(100vh-100px)] text-center px-6 pt-20 pb-10">

        <!-- Bloc texte -->
        <div class="max-w-[327px] flex flex-col items-center">
            <h5 class="font-barlow-condensed text-[#D0D6F9] uppercase tracking-[2.7px] text-[16px] mb-4">
                Donc vous voulez voyager dans
            </h5>

            <h1 class="font-bellefair text-white uppercase text-[80px] leading-[100px] mb-6">
                L’espace
            </h1>

            <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[25px] mb-[81px]">
                Fais un voyage dans l’espace et laisse derrière toi la Terre pour un moment. 
                Viens découvrir de nouveaux horizons et vivre l’expérience ultime du voyage.
            </p>
        </div>

        <!-- Bouton Explorer -->
        <div class="relative flex items-center justify-center group">
            <a href="{{ route('destinations') }}" 
               class="flex items-center justify-center w-[150px] h-[150px] rounded-full bg-white text-[#0B0D17] font-bellefair text-[20px] uppercase tracking-[1px] z-10 transition duration-300">
                Explorer
            </a>

            <!-- Cercle hover -->
            <div class="absolute w-[274px] h-[274px] rounded-full bg-white/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
        </div>
    </section>

</x-layout>
