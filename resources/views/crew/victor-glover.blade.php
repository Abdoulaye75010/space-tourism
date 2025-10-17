<x-layout :title="'ÉQUIPAGE | Victor Glover'"
          :description="'Rencontrez notre équipage : Victor Glover, pilote.'"
          :background="[
              'desktop' => 'images/crew/background-crew-desktop.jpg',
              'tablet'  => 'images/crew/background-crew-tablet.jpg',
              'mobile'  => 'images/crew/background-crew-mobile.jpg',
          ]">

    <section class="flex flex-col items-center text-center w-full max-w-[375px] mx-auto px-6 mt-8">

        <h2 class="text-[16px] leading-[19px] tracking-[2.7px] font-barlow-condensed font-bold text-white uppercase mb-4 opacity-25">
            02 RENCONTREZ L'ÉQUIPAGE
        </h2>

        <img src="{{ asset('images/crew/image-victor-glover.png') }}" 
             alt="Pilote Victor Glover" 
             class="w-[327px] h-[223px] mb-4 rounded-lg shadow-lg object-cover">

        <div class="w-[327px] h-[1px] bg-gray-600 mb-4"></div>

        <div class="flex justify-center space-x-2 mb-4">
            <span class="w-3 h-3 bg-gray-500 rounded-full"></span>
            <span class="w-3 h-3 bg-gray-500 rounded-full"></span>
            <span class="w-3 h-3 bg-white rounded-full"></span>
            <span class="w-3 h-3 bg-gray-500 rounded-full"></span>
        </div>

        <h4 class="text-[16px] leading-[18px] font-barlow text-white uppercase mb-1">
            Pilote
        </h4>
        <h3 class="text-[24px] leading-[28px] font-bellefair text-white uppercase mb-4">
            Victor Glover
        </h3>

        <p class="text-[15px] leading-[25px] font-barlow text-[#D0D6F9]">
            Victor Jerome Glover est un pilote et astronaute américain. 
            Il est responsable du pilotage et des manœuvres délicates lors de la mission spatiale.
        </p>

    </section>
</x-layout>
