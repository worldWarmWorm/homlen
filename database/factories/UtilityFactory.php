<?php

namespace Database\Factories;

use Homelen\Models\Provider;
use Homelen\Models\Utility;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilityFactory extends Factory
{
    protected $model = Utility::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'tax' => fake()->randomFloat(2, 0, 10000),
            'measure' => fake()->text(6),
            'measure_description' => fake()->text(50),
            'html_selector' => fake()->text(100),
            'is_actual' => fake()->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
