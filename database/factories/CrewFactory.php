<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CrewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'role_fr' => $this->faker->randomElement([
                'Commandant',
                'Pilote',
                'Spécialiste de mission',
                'Ingénieur de vol'
            ]),
            'role_en' => $this->faker->randomElement([
                'Commander',
                'Pilot',
                'Mission Specialist',
                'Flight Engineer'
            ]),
            'bio_fr' => $this->faker->paragraph(3),
            'bio_en' => $this->faker->paragraph(3),
            'image' => 'crew-placeholder.png', // une image par défaut
        ];
    }
}
