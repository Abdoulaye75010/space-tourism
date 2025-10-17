<!--
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Technologies - Space Tourism</title>
</head>
<body>
    <h1>Explorez nos technologies</h1>
    <nav>
        <a href="{{ route('home') }}">Accueil</a> |
        <a href="{{ route('destinations') }}">Destinations</a> |
        <a href="{{ route('crew') }}">Équipage</a> |
        <a href="{{ route('technology') }}">Technologies</a>
    </nav>
</body>
</html>
--> 

<x-layout :title="'TECHNOLOGIES | Space Tourism'"
          :description="'Découvrez nos technologies pour vos voyages spatiaux.'"
          :background="'images/technology/background-technology-desktop.jpg'">

    {{-- Section principale avec les technologies --}}
    <section class="mt-8">
        {{-- Titre de la section --}}
        <h2 class="text-3xl font-bold mb-6 text-center">Les technologies qui rendent ce voyage possible</h2>

        {{-- Grille des technologies --}}
        <div class="grid md:grid-cols-3 gap-6">
            {{-- Technologie 1 --}}
            <div class="bg-black text-white rounded-lg shadow p-4 text-center">
                <h3 class="text-xl font-semibold mb-2">Propulsion avancée</h3>
                <p>Permet de voyager plus vite et plus loin dans l’espace.</p>
            </div>

            {{-- Technologie 2 --}}
            <div class="bg-black text-white rounded-lg shadow p-4 text-center">
                <h3 class="text-xl font-semibold mb-2">Systèmes de survie</h3>
                <p>Assure la sécurité et le confort de l’équipage durant la mission.</p>
            </div>

            {{-- Technologie 3 --}}
            <div class="bg-black text-white rounded-lg shadow p-4 text-center">
                <h3 class="text-xl font-semibold mb-2">Habitat spatial</h3>
                <p>Fournit un environnement stable et sécurisé pour vivre dans l’espace.</p>
            </div>
        </div>
        {{-- Fin de la grille --}}
    </section>
</x-layout>




