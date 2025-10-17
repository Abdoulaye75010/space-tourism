<x-layout 
    :title="'ACCUEIL | Space Tourism'"
    :description="'Découvrez Space Tourism et préparez-vous pour un voyage spatial unique.'"
    :background="[
        'desktop' => 'images/home/background-home-desktop.jpg',
        'tablet'  => 'images/home/background-home-tablet.jpg',
        'mobile'  => 'images/home/background-home-mobile.jpg',
    ]">

    <!-- SECTION ACCUEIL - VERSION MOBILE FIRST -->
    <section class="flex flex-col items-center justify-center text-center px-6 pt-20 pb-10 space-y-6">

        <!-- Bloc texte -->
         <div class="w-[327px] h-[276px] flex flex-col items-center justify-center <div class= -translate-y-16">">
        
  <h5 class="font-barlow-condensed text-[#D0D6F9] uppercase text-[16px] leading-[19px] tracking-[2.7px] mb-2">
      Donc vous voulez voyager dans
  </h5>

  <h1 class="font-bellefair text-white uppercase text-[76px] leading-[90px] mb-4">
      L’espace
  </h1>

  <p class="font-barlow text-[#D0D6F9] text-[15px] leading-[22px] text-center">
      Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace 
      et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner 
      une expérience vraiment extraordinaire !
  </p>
</div>

        <!-- Bouton Explorer -->
        <div class="relative flex items-center justify-center group">
            <a href="{{ route('destinations') }}" 
               class="flex items-center justify-center w-[150px] h-[150px] rounded-full bg-white text-[#0B0D17] font-bellefair text-[20px] leading-[23px] tracking-[1,25px] uppercase z-10 transition duration-300">
                Explorer
            </a>

            <!-- Cercle hover -->
            <div class="absolute w-[274px] h-[274px] rounded-full bg-white/10 opacity-0 group-hover:opacity-100 transition duration-300"></div>
        </div>
    </section>

</x-layout>
