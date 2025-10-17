<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function show($planet = 'lune')
    {
        $planets = [
            'lune' => [
                'title' => 'Lune',
                'image' => 'image-moon.png',
                'description' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterissage de Luna 2 et Apollo 11.",
                'distance' => '384 400 km',
                'duration' => '3 jours', 
            ],
            'mars' => [
                'title' => 'Mars',
                'image' => 'image-mars.png',
                'description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest! ",
                'distance' => '225 gm',
                'duration' => '9 mois',
            ],
            'europe' => [
                'title' => 'Europe',
                'image' => 'image-europa.png',
                'description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
                'distance' => '628 gm',
                'duration' => '6 ans',
            ],
            'titan' => [
                'title' => 'Titan',
                'image' => 'image-titan.png',
                'description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
                'distance' => '1,6 tm',
                'duration' => '7 ans',
            ],
        ];

        $backgrounds = [
            'mobile' => 'images/destination/background-destination-mobile.jpg',
            'tablet' => 'images/destination/background-destination-tablet.jpg',
            'desktop' => 'images/destination/background-destination-desktop.jpg',
        ];

        abort_unless(isset($planets[$planet]), 404);

        return view('destinations.index', [
            'planet' => $planets[$planet],
            'planets' => $planets,
            'backgrounds' => $backgrounds
        ]);
    }
}
