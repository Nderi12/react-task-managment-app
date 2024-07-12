<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        for ($i = 1; $i <= 5; $i++) { 
            Project::create([
                'name' => $faker->name()
            ]);
        }
    }
}
