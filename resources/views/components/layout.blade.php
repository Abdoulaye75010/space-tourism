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
    <div class="container mx-auto flex items-center justify-between p-4 max-w-6xl">
        {{-- Logo --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/shared/logo.svg') }}" alt="Logo Space Tourism" class="w-10 h-10 md:w-12 md:h-12">
        </a>

        {{-- Menu principal desktop --}}
        <nav class="hidden md:flex space-x-6 uppercase tracking-widest">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
               {{ __('messages.menu.home')}}
            </a>

            <a href="{{ route('destinations.index') }}"
               class="{{ request()->routeIs('destinations.*') ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
               {{ __('messages.menu.destinations')}}
            </a>

            <a href="{{ route('crew.index') }}"
               class="{{ request()->routeIs('crew.*') ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
               {{ __('messages.menu.crew') }}
            </a>

            <a href="{{ route('technology.index') }}"
               class="{{ request()->routeIs('technology.*') ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-gray-400 pb-1' }}">
               {{ __('messages.menu.technology')}}
            </a>
        </nav>

        {{-- Burger menu mobile --}}
        <button id="mobile-menu-button" class="md:hidden p-2">
            <img src="{{ asset('images/shared/icon-hamburger.svg') }}" alt="Ouvrir le menu" class="w-6 h-[21px]">
        </button>
    </div>

    {{-- Menu mobile --}}
    <nav id="mobile-menu" class="hidden flex-col space-y-2 uppercase tracking-widest p-4 bg-black md:hidden">
        <a href="{{ route('home') }}">{{ __('messages.menu.home')}}</a>
        <a href="{{ route('destinations.index') }}">{{ __('messages.menu.destinations')}}</a>
        <a href="{{ route('crew.index') }}">{{ __('messages.menu.crew')}}</a>
        <a href="{{ route('technology.index') }}">{{ __('messages.menu.technology') }}</a>
    </nav>
</header>

    {{-- Contenu principal --}}
    <main class="container mx-auto p-4 max-w-6xl flex-grow">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-black shadow mt-6">
        <div class="container mx-auto text-center p-4 text-gray-400 max-w-6xl">
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
