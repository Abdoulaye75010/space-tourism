<x-layout :title="'ÉQUIPAGE | Space Tourism'"
          :description="'Rencontrez notre équipage pour vos voyages spatiaux.'"
          :background="[
              'desktop' => 'images/crew/background-crew-desktop.jpg',
              'tablet' => 'images/crew/background-crew-tablet.jpg',
              'mobile' => 'images/crew/background-crew-mobile.jpg',
          ]">

    {{-- Section principale --}}
    <section class="flex flex-col items-center text-center w-full max-w-[375px] mx-auto px-6 mt-0">

        <!-- Titre secondaire -->
        <h2 class="text-[16px] leading-[19px] tracking-[2.7px] font-barlow-condensed font-bold text-white uppercase mb-4">
            02 RENCONTREZ L'ÉQUIPAGE
        </h2>

        <!-- Image du membre -->
        <img src="{{ asset('images/crew/image-douglas-hurley.png') }}" 
             alt="Commandant Douglas" 
             class="crew-image w-[327px] h-[223px] mb-4 rounded-lg shadow-lg object-cover">

        <!-- Points de navigation -->
        <div class="crew-nav flex justify-center space-x-2 mb-4">
            <span class="dot w-3 h-3 bg-white rounded-full cursor-pointer"></span> {{-- point actif --}}
            <span class="dot w-3 h-3 bg-gray-500 rounded-full cursor-pointer"></span>
            <span class="dot w-3 h-3 bg-gray-500 rounded-full cursor-pointer"></span>
            <span class="dot w-3 h-3 bg-gray-500 rounded-full cursor-pointer"></span>
        </div>

        <!-- Fonction et nom -->
        <h4 class="crew-role text-[16px] leading-[18px] font-barlow text-white uppercase mb-1">
            Commandant
        </h4>
        <h3 class="crew-name text-[24px] leading-[28px] font-bellefair text-white uppercase mb-4">
            Douglas Hurley
        </h3>

        <!-- Texte présentation -->
        <p class="crew-bio text-[15px] leading-[25px] font-barlow text-[#D0D6F9]">
            Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. 
            Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaisseau Crew Dragon Demo-2.
        </p>

    </section>

    @push('scripts')
    <script src="{{ asset('js/crew.js') }}"></script>
    @endpush
</x-layout>