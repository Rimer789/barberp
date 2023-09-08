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
        Schema::create('reservas3', function (Blueprint $table) {
            $table->id(); // Campo autoincremental "id"
            $table->string('nombre', 50); // Campo "nombre" de tipo varchar con una longitud de 50 caracteres
            $table->dateTime('fecha_hora'); // Campo "fecha_hora" de tipo datetime
            $table->timestamps(); // Campos de registro de timestamps (created_at y updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas3');
    }
};
