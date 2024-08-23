<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\EnergyScore;
use App\Models\PropertyType;
use App\Models\SpecialRequirement;
use App\Models\SpecialRequirementCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * User factory.
         *
         * @see \Database\Factories\UserFactory
         */
        User::factory(1)->create();

        /**
         * Energy score factory.
         */
        $rates = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

        foreach ($rates as $rate) {
            EnergyScore::factory()->create([
                'rate' => $rate
            ]);
        }

        /**
         * Property type factory.
         */
        PropertyType::factory()->create();

        /**
         * Special requirements categories factory.
         */
        SpecialRequirementCategory::factory(4)->create();

        /**
         * Special requirements factory.
         */
        SpecialRequirement::factory(10)->create();
    }
}
