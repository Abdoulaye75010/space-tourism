<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planets = [
        [  'name' => 'lune',
            'description' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterissage de Luna 2 et Apollo 11.", 
            'image' => 'image-moon.png',
            'distance' => '384 000 KM',
            'duration' => '3 jours'
        ],
        [
            'name' => 'Mars',
            'description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest! ",
            'image' => 'image-mars.png',
            'distance' => '225 GM',
            'duration' => '9 mois'
        ],
        [
            'name' => 'Europe',
            'description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
            'image' => 'image-europa.png',
            'distance' => '628 GM',
            'duration' => '6 ans'
        ],
        [
            'name' => 'Titan',
                'description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
                'image' => 'image-titan.png',
                'distance' => '1,6 tm',
                'duration' => '7 ans'
        ],
    ];

    // pour parcourir le tableau

     foreach ($planets as $planet) {
            Planet::create($planet);
     }

    }
}
