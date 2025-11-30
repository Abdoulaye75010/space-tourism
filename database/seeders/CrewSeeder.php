<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crew;

class CrewSeeder extends Seeder
{
    public function run(): void
    {
        Crew::create([
            'name' => 'Douglas Hurley',
            'name_fr' => 'Douglas Hurley',
            'name_en' => 'Douglas Hurley',

            'role' => 'Commander',
            'role_fr' => 'Commandant',
            'role_en' => 'Commander',

            'bio' => 'Douglas Hurley is an American engineer and NASA astronaut.',
            'bio_fr' => 'Douglas Hurley est un ingénieur et astronaute américain.',
            'bio_en' => 'Douglas Hurley is an American engineer and NASA astronaut.',

            'image' => 'image-douglas-hurley.webp',
        ]);

        Crew::create([
            'name' => 'Mark Shuttleworth',
            'name_fr' => 'Mark Shuttleworth',
            'name_en' => 'Mark Shuttleworth',

            'role' => 'Mission Specialist',
            'role_fr' => 'Spécialiste de mission',
            'role_en' => 'Mission Specialist',

            'bio' => 'Mark Shuttleworth is a South African entrepreneur and astronaut.',
            'bio_fr' => 'Mark Shuttleworth est un entrepreneur et astronaute sud-africain.',
            'bio_en' => 'Mark Shuttleworth is a South African entrepreneur and astronaut.',

            'image' => 'image-mark-shuttleworth.webp',
        ]);
    }
}
