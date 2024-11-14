<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $technologies = Technology::all();

        foreach ($projects as $project) {
            $project->technologies()->attach($technologies->random(rand(1, 7))->pluck('id'));
        }
    }
}