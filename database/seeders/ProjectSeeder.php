<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'laravel-auth',
            'type_id' => 1,
            'description' => 'Primo progetto Laravel con autenticazione',
            'url' => 'https://github.com/orazi-paolo/laravel-auth'
        ]);
    }
}