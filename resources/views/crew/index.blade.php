<x-layout 
    :title="'CREW | Space Tourism'" 
    :background="[
        'desktop' => 'images/crew/background-crew-desktop.jpg',
        'tablet'  => 'images/crew/background-crew-tablet.jpg',
        'mobile'  => 'images/crew/background-crew-mobile.jpg',
    ]">

    <section
        class="px-6 md:px-8 lg:px-0
               pt-8 md:pt-16 lg:pt-24
               pb-14 text-white overflow-hidden lg:max-w-[1400px] lg:mx-auto">

        {{-- 02 RENCONTREZ L’ÉQUIPE --}}
        <h2 class="font-barlow-condensed uppercase tracking-[2.7px]
                   text-[16px] md:text-[20px]
                   text-center md:text-left
                   mb-4 lg:mb-6 lg:ml-20 lg:-mt-8">
            <span class="opacity-25 font-bold mr-2">02</span>
            {{ __('messages.titles.crew') }}
        </h2>

        {{-- LAYOUT PRINCIPAL --}}
        <div class="flex flex-col items-center text-center
                    lg:flex-row lg:items-start lg:justify-between lg:gap-8">

            {{-- COLONNE TEXTE --}}
            <div class="flex flex-col items-center text-center
                        max-w-[458px]
                        lg:items-start lg:text-left lg:max-w-[700px]
                        lg:ml-20 lg:mt-0">

                {{-- RÔLE --}}
                <p class="font-barlow-condensed uppercase text-[#D0D6F9]
                          tracking-[2.36px]
                          text-[14px] md:text-[20px] lg:text-[24px]
                          mt-8">
                    {{ $crew->role }}
                </p>

                {{-- NOM --}}
                <h1 class="font-bellefair uppercase
                           text-[24px] leading-[28px]
                           md:text-[40px] md:leading-[46px]
                           lg:text-[56px] lg:leading-[64px]
                           mt-2">
                    {{ $crew->name }}
                </h1>

                {{-- BIO --}}
                <p class="font-barlow text-[#D0D6F9]
                          text-[15px] leading-[25px]
                          md:text-[16px] md:leading-[28px]
                          mt-4 mb-6">
                    {{ $crew->biography }}
                </p>

                {{-- DOTS --}}
                <nav class="flex justify-center lg:justify-start gap-3 mt-8">
                    @foreach($crews as $member)
                        <a href="{{ route(app()->getLocale() . '.crew.show', ['id' => $member->id]) }}"
                           class="w-3 h-3 rounded-full inline-block transition
                                  {{ $crew->id === $member->id
                                      ? 'bg-white'
                                      : 'bg-gray-500 hover:bg-gray-300' }}">
                        </a>
                    @endforeach
                </nav>
            </div>

            {{-- COLONNE IMAGE --}}
            <div class="lg:-mt-24 lg:self-start">
                <img
                    src="{{ asset('images/crew/' . $crew->image) }}" 
                    alt="{{ $crew->name }}" 
                    class="w-[200px] h-[200px]
                           md:w-[456px] md:h-[456px]
                           lg:w-[500px] lg:h-[500px]
                           object-contain mx-auto"
                />

                <hr class="w-[327px] mx-auto border-[#383B4B] mt-6 md:hidden">
            </div>

        </div>
    </section>

</x-layout>
