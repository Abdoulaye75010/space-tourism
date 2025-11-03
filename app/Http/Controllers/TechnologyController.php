<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Technology;

class TechnologyController extends Controller
{
    // Affiche toutes les technologies
    public function index()
    {
        $technologies = Technology::all();
      
        return view('technology.index', compact('technologies'));
    }

    // Affichage par id
    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technology.show', compact('technology'));
    }
}

=======

class TechnologyController extends Controller
{
    // Liste de toutes les technologies
  private $technologies = [
    'launch-vehicle' => [
        'name' => 'Le lanceur',
        'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
        // EN: "A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a payload from Earth’s surface to space, usually to Earth orbit or beyond."
        'image' => 'images/technology/image-launch-vehicle-portrait.jpg'
    ],

    'spaceport' => [
        'name' => 'Port spatial',
        'description' => "Un port spatial, ou cosmodrome, est un site dédié au lancement et à la récupération de véhicules spatiaux, comparable à un port maritime ou un aéroport sur Terre.",
        // EN: "A spaceport or cosmodrome is a site for launching or receiving spacecraft, by analogy to a seaport for ships or airport for aircraft."
        'image' => 'images/technology/image-spaceport-portrait.jpg'
    ],

    'space-capsule' => [
        'name' => 'Capsule spatiale',
        'description' => "Une capsule spatiale est un vaisseau — souvent habité — utilisant une coque de rentrée atmosphérique pour revenir sur Terre.",
        // EN: "A space capsule is an often-crewed spacecraft that uses a blunt-body reentry capsule to reenter the Earth’s atmosphere."
        'image' => 'images/technology/image-space-capsule-portrait.jpg'
    ],
];

    public function index($tech = 'launch-vehicle')
    {
        $technologies = $this->technologies;

        // Si la technologie demandée n'existe pas, revenir à la première
        if (!array_key_exists($tech, $technologies)) {
            $tech = 'launch-vehicle';
        }

        $selected = $technologies[$tech];

        return view('tasks.technology', compact('technologies', 'selected', 'tech'));
    }
}
>>>>>>> d76298b5d27d0337f1566e129c64ca6d489b953c
