<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyType>
 */
class PropertyTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique(true)->randomElement([
                'Maison',
                'Appartement',
                'Terrain',
                'Fond de commerce',
                'Château',
                'Bureaux',
                'Hôtel particulier',
                'Local commercial',
                'Bâtiment/Immeuble',
                'Parking/Box',
                'Loft/Atelier/Surface',
                'Duplex/Triplex',
                'Autres',
            ]),
        ];
    }
}
