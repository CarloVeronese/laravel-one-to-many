<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_project = new Project();
            $new_project->project_name = $faker->sentence();
            $new_project->description = $faker->sentence(20);
            $new_project->development_type = $faker->randomElement(['front-end', 'back-end', 'full-stack']);
            $new_project->github_link = 'https://github.com/CarloVeronese/'. Str::slug($new_project->project_name);
            $new_project->project_status = $faker->randomElement(['to start', 'in progress', 'completed']);
            $new_project->save();
        }
    }
}
