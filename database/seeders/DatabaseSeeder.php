<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Amilcar',
            'email' => 'amilcar1776@gmail.com',
            'password' => 'Contraseña',
        ]);

        $this->call([
            EstadoSeeder::class,
            OficinaSeeder::class,
            ResponsableSeeder::class,
            GrupoSeeder::class,
        ]);
    }
}
