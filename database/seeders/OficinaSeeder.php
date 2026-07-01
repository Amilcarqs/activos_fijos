<?php

namespace Database\Seeders;

use App\Models\Oficina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //INSERTANDO DATOS USANDO EL MODELO
        Oficina::create([
            'codigo' => 'A678',
            'nombre' => 'Recursos humanos',
            'piso' => 'PB'
        ]);

        Oficina::create([
            'codigo' => 'A789',
            'nombre' => 'Dirección general',
            'piso' => '1'
        ]);

        Oficina::create([
            'codigo' => 'A765',
            'nombre' => 'Portería',
            'piso' => 'PB'
        ]);

        Oficina::create([
            'codigo' => 'X654',
            'nombre' => 'Archivo',
            'piso' => '1'
        ]);

        Oficina::create([
            'codigo' => 'D345',
            'nombre' => 'Contabilidad',
            'piso' => '2'
        ]);

        Oficina::create([
            'codigo' => 'F345',
            'nombre' => 'Ingeniería de sistemas',
            'piso' => '2'
        ]);

        Oficina::create([
            'codigo' => 'R323',
            'nombre' => 'Dirección de Administración Financiera',
            'piso' => '2'
        ]);

        Oficina::create([
            'codigo' => 'W344',
            'nombre' => 'Dirección Legal',
            'piso' => '2'
        ]);

        Oficina::create([
            'codigo' => 'G567',
            'nombre' => 'Dirección de Obras Públicas',
            'piso' => '2'
        ]);
    }
}
