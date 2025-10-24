<x-layout 
    :title="'ESPACEPORT | Space Tourism'"
    :description="'Découvrez le port spatial où commencent toutes les missions.'"
    :background="[
        'desktop' => 'images/technology/background-technology-desktop.jpg',
        'tablet'  => 'images/technology/background-technology-tablet.jpg',
        'mobile'  => 'images/technology/background-technology-mobile.jpg',
    ]">

    <section class="flex flex-col items-center text-center px-6 pt-20 pb-10">
        <h2 class="text-[16px] leading-[19px] tracking-[2.7px] font-barlow-condensed text-white uppercase mb-8">
            <span class="opacity-25 mr-2">03</span> LANCEZ LA TECHNOLOGIE
        </h2>

        <div class="max-w-[327px] flex flex-col items-center">
            <h3 class="font-barlow-condensed text-[#D0D6F9] uppercase text-[14px] tracking-[2.36px] mb-2">La terminologie...</h3>

            <h1 class="font-bellefair text-white uppercase text-[24px] leading-[28px] mb-2">
                Espaceport
            </h1>

            <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[25px] mb-[50px]">
                L’espaceport est le centre d’opérations où les fusées sont préparées, alimentées et lancées. 
                C’est ici que commence votre voyage dans les étoiles.
            </p>

            <img src="{{ asset('images/technology/image-spaceport-portrait.jpg') }}" 
                 alt="Espaceport"
                 class="w-[327px] h-auto rounded-lg object-contain">
        </div>
    </section>

</x-layout>

