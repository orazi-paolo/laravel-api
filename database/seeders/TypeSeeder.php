<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creo un array per le tipologie di progetti
        $types = [
            'Fullstack',
            'Frontend',
            'Backend'
        ];
        // ciclo l'array e creo un record per ogni tipologia
        foreach ($types as $type){
            Type::create([
                'name' => $type
            ]);
        }
    }
}