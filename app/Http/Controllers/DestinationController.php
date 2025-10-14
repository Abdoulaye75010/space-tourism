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
                'description' => 'Mars, la planète rouge, mystérieuse et fascinante.',
                'distance' => '225 millions km',
                'duration' => '9 mois',
            ],
            'europe' => [
                'title' => 'Europe',
                'image' => 'image-europa.png',
                'description' => 'Europe, lune glacée de Jupiter, abritant peut-être un océan sous sa surface.',
                'distance' => '628 millions km',
                'duration' => '6 ans',
            ],
            'titan' => [
                'title' => 'Titan',
                'image' => 'image-titan.png',
                'description' => 'Titan, lune de Saturne, avec une atmosphère épaisse et mystérieuse.',
                'distance' => '1,6 milliards km',
                'duration' => '7 ans',
            ],
        ];

        $backgrounds = [
            'mobile' => 'images/destination/background-destination-mobile.jpg',
            'tablet' => 'images/destination/background-destination-tablet.jpg',
            'desktop' => 'images/destination/background-destination-desktop.jpg',
        ];

        abort_unless(isset($planets[$planet]), 404);

        return view('tasks.destinations', [
            'planet' => $planets[$planet],
            'planets' => $planets,
            'backgrounds' => $backgrounds
        ]);
    }
}
