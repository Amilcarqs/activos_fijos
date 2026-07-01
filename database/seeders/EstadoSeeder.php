<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertando datos usando DB::table
        DB::table('estados')->insert([
            [
                'descrip' => 'Nuevo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descrip' => 'Malo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descrip' => 'Regular',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    //PARA INSERTAR USANDO EL MODELO
    /*
    public function run(): void
    {
        Estado::create(['descrip' => 'Nuevo']);
        Estado::create(['descrip' => 'Malo']);
        Estado::create(['descrip' => 'Regular']);
    }
    */
}
