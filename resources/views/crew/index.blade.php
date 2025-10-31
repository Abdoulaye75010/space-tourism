<x-layout :title="'ÉQUIPAGE | Space Tourism'"
          :description="'Rencontrez notre équipage pour vos voyages spatiaux.'"
          :background="[
              'desktop' => 'images/crew/background-crew-desktop.jpg',
              'tablet' => 'images/crew/background-crew-tablet.jpg',
              'mobile' => 'images/crew/background-crew-mobile.jpg',
          ]">

    <section class="flex flex-col items-center text-center w-full max-w-[375px] mx-auto px-6 mt-0">

        <h2 class="text-[16px] leading-[19px] tracking-[2.7px] font-barlow-condensed font-bold text-white uppercase mb-4 w-[222px] h-[19px] whitespace-nowrap">
            <span class="opacity-25 font-bold mr-2">02</span> {{__('messages.titles.crew')}}
        </h2>

        @if($crew)

    {{-- Image + trait collé en dessous --}}
<div class="relative w-[327px] h-[223px] mb-6">
    <img 
        src="{{ asset('images/crew/image-' . $crew->image) }}" 
        alt="{{ $crew->first_name }} {{ $crew->last_name }}"
        class="w-full h-full rounded-lg shadow-lg object-contain"
    />
    {{-- Trait collé au bas de l’image --}}
    <div class="absolute bottom-0 left-0 w-full border-t border-gray-600 opacity-50"></div>
</div>

    {{-- Boutons de navigation --}}
    <div class="crew-nav flex justify-center space-x-2 mb-6">
        @foreach($crews as $c)
            <a href="{{ route('crew.show', ['id' => $c->id]) }}"
               class="dot w-3 h-3 rounded-full {{ $crew->id === $c->id ? 'bg-white' : 'bg-gray-500' }}">
            </a>
        @endforeach
    </div>

    {{-- Rôle traduit --}}
    <h4 class="text-[16px] leading-[18px] font-barlow text-white uppercase mb-1">
      {{$crew->role}}
    </h4>

    {{-- Nom complet --}}
    <h3 class="text-[24px] leading-[28px] font-bellefair text-white uppercase mb-4">
        {{ $crew->firstname }} {{ $crew->lastname }}
    </h3>

    {{-- Description --}}
    <p class="text-[15px] leading-[25px] font-barlow text-[#D0D6F9]">
        {{ $crew->biography }}
    </p>

@endif

    </section>

    @push('scripts')
        <script src="{{ asset('js/crew.js') }}"></script>
    @endpush
</x-layout>