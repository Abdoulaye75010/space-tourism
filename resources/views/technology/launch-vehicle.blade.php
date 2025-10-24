<x-layout 
    :title="'LANCEUR SPATIAL | Space Tourism'"
    :description="'Découvrez la technologie du lanceur spatial.'"
    :background="[
        'desktop' => 'images/technology/background-technology-desktop.jpg',
        'tablet'  => 'images/technology/background-technology-tablet.jpg',
        'mobile'  => 'images/technology/background-technology-mobile.jpg',
    ]">

    <section class="flex flex-col items-center text-center px-6 pt-20 pb-10">
        <!-- Titre principal -->
        <h2 class="text-[16px] leading-[19px] tracking-[2.7px] font-barlow-condensed text-white uppercase mb-8">
            <span class="opacity-25 mr-2">03</span> LANCEZ LA TECHNOLOGIE
        </h2>

        <!-- Contenu -->
        <div class="max-w-[327px] flex flex-col items-center">
            <h3 class="font-barlow-condensed text-[#D0D6F9] uppercase text-[14px] tracking-[2.36px] mb-2">La terminologie...</h3>

            <h1 class="font-bellefair text-white uppercase text-[24px] leading-[28px] mb-2">
                Lanceur Spatial
            </h1>

            <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[25px] mb-[50px]">
                Un lanceur spatial est une fusée utilisée pour envoyer un vaisseau ou des astronautes en orbite. 
                C’est la technologie clé qui permet de quitter la surface de la Terre.
            </p>

            <img src="{{ asset('images/technology/image-launch-vehicle-portrait.jpg') }}" 
                 alt="Lanceur Spatial"
                 class="w-[327px] h-auto rounded-lg object-contain">
        </div>
    </section>

</x-layout>
