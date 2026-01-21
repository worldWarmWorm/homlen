<?php

namespace Database\Seeders;

use Homelen\Models\Provider;
use Homelen\Models\User;
use Homelen\Models\Utility;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(5)->create();

        $providers = Provider::factory(5)->create();

        foreach (range(1, 25) as $_) {
            Utility::factory()->create([
                'provider_id' => $providers->random()->id,
            ]);
        }
    }
}
