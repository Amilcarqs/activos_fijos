<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Responsable;

class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertando datos usando el modelo Responsable
        Responsable::create([
            'nombre' => 'Juan Carlos Mamani',
            'ci' => '4564546',
            'foto' => null
        ]);

        Responsable::create([
            'nombre' => 'María Apaza',
            'ci' => '8787645',
            'foto' => null
        ]);

        Responsable::create([
            'nombre' => 'Soledad Ríos',
            'ci' => '1235458',
            'foto' => null
        ]);
    }
}
