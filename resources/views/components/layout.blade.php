<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Space Tourism' }}</title>

    {{-- Polices globales --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Barlow:wght@400;700&family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles globaux pour les backgrounds --}}
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

@php
    if (is_array($background)) {
        $bgDesktop = $background['desktop'] ?? null;
        $bgTablet  = $background['tablet'] ?? null;
        $bgMobile  = $background['mobile'] ?? null;
    } else {
        $bgDesktop = $background;
        $bgTablet  = $background;
        $bgMobile  = $background;
    }
@endphp

@stack('scripts')

<body class="bg-black text-white flex flex-col min-h-screen"
      @if($bgMobile) data-background-mobile="{{ asset($bgMobile) }}" @endif
      @if($bgTablet) data-background-tablet="{{ asset($bgTablet) }}" @endif
      @if($bgDesktop) data-background-desktop="{{ asset($bgDesktop) }}" @endif>

    {{-- Header --}}
    <header class="bg-black shadow relative z-50">
    <div class="w-full flex items-center justify-between p-4 lg:max-w-6xl lg:mx-auto">
        {{-- Logo --}}
        <a href="{{ route(app()->getLocale() . '.home') }}">
            <img src="{{ asset('images/shared/logo.svg') }}" alt="Logo Space Tourism" class="w-10 h-10 md:w-12 md:h-12">
        </a>

        {{-- Menu principal desktop --}}
        <nav class="hidden md:flex space-x-6 uppercase tracking-widest">

    {{-- Accueil --}}
    <a href="{{ route(app()->getLocale() . '.home') }}"
       class="{{ request()->routeIs(app()->getLocale() . '.home') 
                    ? 'border-b-2 border-white pb-1' 
                    : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
       {{ __('messages.menu.home')}}
    </a>

    {{-- Destinations --}}
    <a href="{{ route(app()->getLocale() . '.destinations.index') }}"
       class="{{ request()->routeIs(app()->getLocale() . '.destinations.*') 
                    ? 'border-b-2 border-white pb-1' 
                    : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
       {{ __('messages.menu.destinations')}}
    </a>

    {{-- Crew --}}
    <a href="{{ route(app()->getLocale() . '.crew.index') }}"
       class="{{ request()->routeIs(app()->getLocale() . '.crew.*') 
                    ? 'border-b-2 border-white pb-1' 
                    : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
       {{ __('messages.menu.crew') }}
    </a>

    {{-- Technology --}}
    <a href="{{ route(app()->getLocale() . '.technology.index') }}"
       class="{{ request()->routeIs(app()->getLocale() . '.technology.*') 
                    ? 'border-b-2 border-white pb-1' 
                    : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
       {{ __('messages.menu.technology')}}
    </a>
</nav>

        {{-- Sélecteur de langue avec drapeaux appellant /lang/fr ou /lang/en --}}
        <div class="flex items-center space-x-3 ml-4">

            {{-- 🇫🇷 Français --}}
            <a href="{{ url('lang/fr') }}">
                <img src="{{ asset('images/flags/fr.svg') }}" alt="Français" class="w-6 h-4 rounded shadow-md hover:opacity-80 transition">
            </a>

            {{-- 🇬🇧 Anglais --}}
            <a href="{{ url('lang/en') }}">
                <img src="{{ asset('images/flags/en.svg') }}" alt="English" class="w-6 h-4 rounded shadow-md hover:opacity-80 transition">
            </a>
        </div>

        {{-- Burger menu mobile --}}
        <button id="mobile-menu-button" class="md:hidden p-2">
            <img src="{{ asset('images/shared/icon-hamburger.svg') }}" alt="Ouvrir le menu" class="w-6 h-[21px]">
        </button>
    </div>

    {{-- Menu mobile --}}
    {{-- 
=========================================
MENU MOBILE - VERSION MULTILINGUE
-----------------------------------------
🔄 Ancien code :
    <a href="{{ route('home') }}">...</a>
    <a href="{{ route('destinations.index') }}">...</a>
    <a href="{{ route('crew.index') }}">...</a>
    <a href="{{ route('technology.index') }}">...</a>

🆕 Nouveau code :
    Utilise app()->getLocale() pour générer des routes dynamiques
    selon la langue active (/fr ou /en).
=========================================
--}}
<nav id="mobile-menu" class="hidden flex-col space-y-2 uppercase tracking-widest p-4 bg-black md:hidden">
    <a href="{{ route(app()->getLocale() . '.home') }}">
        {{ __('messages.menu.home') }}
    </a>
    <a href="{{ route(app()->getLocale() . '.destinations.index') }}">
        {{ __('messages.menu.destinations') }}
    </a>
    <a href="{{ route(app()->getLocale() . '.crew.index') }}">
        {{ __('messages.menu.crew') }}
    </a>
    <a href="{{ route(app()->getLocale() . '.technology.index') }}">
        {{ __('messages.menu.technology') }}
    </a>
</nav>

</header>

    {{-- Contenu principal --}}
    <main class="w-full px-4 flex-grow 
            lg:max-w-[1110px] lg:mx-auto">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-black shadow mt-6">
        <div class="w-full text-center p-4 text-gray-400 lg:max-w-6xl lg:mx-auto">
            &copy; {{ date('Y') }} {{ __('messages.footer') }}.
    </footer>

    {{-- Script pour le burger, le menu et le background responsive --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                });
            }

            const body = document.body;
            function updateBackground() {
                const width = window.innerWidth;
                if (width < 768 && body.dataset.backgroundMobile) {
                    body.style.backgroundImage = `url('${body.dataset.backgroundMobile}')`;
                } else if (width >= 768 && width < 1024 && body.dataset.backgroundTablet) {
                    body.style.backgroundImage = `url('${body.dataset.backgroundTablet}')`;
                } else if (body.dataset.backgroundDesktop) {
                    body.style.backgroundImage = `url('${body.dataset.backgroundDesktop}')`;
                }
            }

            updateBackground(); 
            window.addEventListener('resize', updateBackground);
        });
    </script>
</body>
</html>
