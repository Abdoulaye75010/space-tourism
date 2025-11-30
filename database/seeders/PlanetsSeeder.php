<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetsSeeder extends Seeder
{
    public function run(): void
    {
        Planet::create([
            'name' => 'Moon',
            'name_fr' => 'Lune',
            'name_en' => 'Moon',

            'description' => 'See our planet as you’ve never seen it before.',
            'description_fr' => 'Voyez notre planète comme vous ne l\'avez jamais vue auparavant.',
            'description_en' => 'See our planet as you’ve never seen it before.',

            'distance' => '384 000 km',
            'duration' => '3 days',

            'image' => 'image-moon.webp',
        ]);

        Planet::create([
            'name' => 'Mars',
            'name_fr' => 'Mars',
            'name_en' => 'Mars',

            'description' => 'Your journey to Mars starts here.',
            'description_fr' => 'Votre voyage vers Mars commence ici.',
            'description_en' => 'Your journey to Mars starts here.',

            'distance' => '225 million km',
            'duration' => '9 months',

            'image' => 'image-mars.webp',
        ]);
    }
}