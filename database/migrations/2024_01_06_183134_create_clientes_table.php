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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Crea una columna de identificación automática (clave primaria)
            $table->string('nombre'); // Crea una columna de tipo cadena llamada 'nombre'
            $table->string('apellidos'); // Crea una columna de tipo cadena llamada 'apellidos'
            $table->timestamps(); // Crea columnas de marcas de tiempo 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes'); // Elimina la tabla 'clientes' si existe
    }
};

