<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crew;

class CrewSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crews = [
            [
                'firstname' => 'Douglas',
                'lastname' => 'Hurley',
                'role' => 'Commander',
                'biography' => "Douglas Gerald Hurley est un ingénieur américain, pilote du Corps des Marines à la retraite et ancien astronaute de la NASA.",
                'image' => 'douglas-hurley.png'
            ],
            [
                'firstname' => 'Mark',
                'lastname' => 'Shuttleworth',
                'role' => 'Mission Specialist',
                'biography' => "Mark Richard Shuttleworth est un entrepreneur sud-africain-britannique et un touriste de l’espace, fondateur de Canonical (Ubuntu).",
                'image' => 'mark-shuttleworth.png'
            ],
            [
                'firstname' => 'Victor',
                'lastname' => 'Glover',
                'role' => 'Pilot',
                'biography' => "Victor J. Glover est un astronaute de la NASA et ancien pilote d’essai de la marine américaine.",
                'image' => 'victor-glover.png'
            ],
            [
                'firstname' => 'Anousheh',
                'lastname' => 'Ansari',
                'role' => 'Flight Engineer',
                'biography' => "Anousheh Ansari est une ingénieure irano-américaine et la première femme musulmane à être allée dans l’espace.",
                'image' => 'anousheh-ansari.png'
            ],
        ];

        foreach ($crews as $crew) {
            Crew::create($crew);
        }

    }
}
