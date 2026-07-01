<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();

            $table->string('codigo')->unique();
            $table->string('descrip');
            $table->decimal('precio', 10, 2);
            $table->date('fadquisicion');
            $table->string('foto')->nullable();

            $table->foreignId('estado_id')
                ->constrained('estados')
                ->restrictOnDelete();

            $table->foreignId('grupo_id')
                ->constrained('grupos')
                ->restrictOnDelete();

            $table->foreignId('oficina_id')
                ->constrained('oficinas')
                ->restrictOnDelete();

            $table->foreignId('responsable_id')
                ->constrained('responsables')
                ->restrictOnDelete();
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
