<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesSeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            [
                'name_fr' => 'Lanceur',
                'name_en' => 'Launch Vehicle',

                'description_fr' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                'description_en' => "A launch vehicle or carrier rocket is a rocket-propelled vehicle used to transport a payload from the surface of the Earth into space, usually into Earth orbit or beyond. Our WEB-X rocket is the most powerful in service. Standing 150 meters tall, it creates an impressive spectacle on the launch pad!",

                'image_landscape' => 'launch-vehicle-landscape.jpg',
                'image_portrait'  => 'launch-vehicle-portrait.jpg',
            ],
            [
                'name_fr' => 'Port spatial',
                'name_en' => 'Spaceport',

                'description_fr' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                'description_en' => "A spaceport or cosmodrome is a launch (or landing) site for spacecraft, analogous to a seaport for ships or an airport for aircraft. Located at the famous Cape Canaveral, our spaceport is ideally positioned to take advantage of Earth’s rotation for launch.",

                'image_landscape' => 'spaceport-landscape.jpg',
                'image_portrait'  => 'spaceport-portrait.jpg',
            ],
            [
                'name_fr' => 'Capsule spatiale',
                'name_en' => 'Space Capsule',

                'description_fr' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
                'description_en' => "A space capsule is a crewed spacecraft that uses a blunt-body capsule to reenter Earth’s atmosphere without wings. Our capsule is where you will spend your time during the flight. It includes a gym, a cinema, and many other activities to keep you entertained.",

                'image_landscape' => 'space-capsule-landscape.jpg',
                'image_portrait'  => 'space-capsule-portrait.jpg',
            ],
        ];

        foreach ($technologies as $tech) {
            Technology::create($tech);
        }
    }
}