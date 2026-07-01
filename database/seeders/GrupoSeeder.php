<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTANDO DATOS USANDO EL MODELO GRUPO
        // INSERTANDO LOS 38 GRUPOS DE ACTIVOS FIJOS
        Grupo::create([
            'descrip' => 'EDIFICACIONES',
            'vidautil' => 40
        ]);

        Grupo::create([
            'descrip' => 'MUEBLES Y ENSERES DE OFICINA',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'MAQUINARIA EN GENERAL',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'BARCOS Y LANCHAS EN GENERAL',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'VEHICULOS AUTOMOTORES',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'AVIONES',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'MAQUINARIA PARA LA CONSTRUCCION',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'MAQUINARIA AGRICOLA',
            'vidautil' => 4
        ]);

        Grupo::create([
            'descrip' => 'ANIMALES DE TRABAJO',
            'vidautil' => 4
        ]);

        Grupo::create([
            'descrip' => 'HERRAMIENTAS EN GENERAL',
            'vidautil' => 4
        ]);

        Grupo::create([
            'descrip' => 'REPRODUCTORES Y HEMBRAS DE PEDIGREE',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'EQUIPOS DE COMPUTACION',
            'vidautil' => 4
        ]);

        Grupo::create([
            'descrip' => 'CANALES DE REGADIO Y POZOS',
            'vidautil' => 20
        ]);

        Grupo::create([
            'descrip' => 'ESTANQUES, BAÑADEROS Y ABREVADEROS',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'ALAMBRADOS, TRANQUERAS Y VALLAS',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'VIVIENDAS PARA EL PERSONAL',
            'vidautil' => 20
        ]);

        Grupo::create([
            'descrip' => 'MUEBLES Y ENSERES EN VIVIENDAS DE PERSONAL',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'SILOS, ALMACENES Y GALPONES',
            'vidautil' => 20
        ]);

        Grupo::create([
            'descrip' => 'TINGLADOS Y COBERTIZOS DE MADERA',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'TINGLADOS Y COBERTIZOS DE METAL',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'INSTALACION DE ELECTRIFICACION Y TELEFONIA RURAL',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'CAMINOS INTERIORES',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'CAÑA DE AZUCAR',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'VIDES',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'FRUTALES',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'POZOS PETROLEROS',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'LINEAS DE RECOLECCION DE LA INDUSTRIA PETROLERA',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'EQUIPOS DE CAMPO DE LA INDUSTRIA PETROLERA',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'PLANTA DE PROCESAMIENTO DE LA INDUSTRIA PETROLERA',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'DUCTOS DE LA INDUSTRIA PETROLERA',
            'vidautil' => 10
        ]);

        Grupo::create([
            'descrip' => 'EQUIPO MEDICO Y DE LABORATORIO',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'EQUIPO DE COMUNICACIONES',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'EQUIPO EDUCACIONAL Y RECREATIVO',
            'vidautil' => 8
        ]);

        Grupo::create([
            'descrip' => 'TERRENOS',
            'vidautil' => 0
        ]);

        Grupo::create([
            'descrip' => 'BIBLIOTECAS',
            'vidautil' => 0
        ]);

        Grupo::create([
            'descrip' => 'OTROS ACTIVOS FIJOS',
            'vidautil' => 0
        ]);

        Grupo::create([
            'descrip' => 'ACTIVOS INTANGIBLES',
            'vidautil' => 5
        ]);

        Grupo::create([
            'descrip' => 'EQUIPO E INSTALACIONES',
            'vidautil' => 8
        ]);
    }
}
