<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Launch Vehicle',
                'description' => "Le lanceur est un puissant véhicule qui transporte la capsule spatiale jusqu'en orbite. Il permet de surmonter la gravité terrestre et de placer le vaisseau sur sa trajectoire.",
                'image' => 'image-launch-vehicle-portrait.jpg'
            ],
            [
                'name' => 'Spaceport',
                'description' => "Le port spatial est le point de départ de toutes les missions. C’est là que les astronautes embarquent et que les fusées sont lancées vers les étoiles.",
                'image' => 'image-spaceport-portrait.jpg'
            ],
            [
                'name' => 'Space Capsule',
                'description' => "La capsule spatiale est le module qui abrite l’équipage. Elle est conçue pour la sécurité et le confort lors des phases de lancement, d’orbite et de retour sur Terre.",
                'image' => 'image-space-capsule-portrait.jpg'
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
