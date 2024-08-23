<?php

namespace Database\Factories;

use App\Models\SpecialRequirementCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialRequirement>
 */
class SpecialRequirementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'special_requirement_category_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->unique(true)->randomElement([
                'Ascenseur',
                'Balcon',
                'Cave',
                'Climatisation',
                'Garage',
                'Gardien',
                'Jardin',
                'Parking',
                'Piscine',
                'Terrasse',
            ]),
        ];
    }
}
