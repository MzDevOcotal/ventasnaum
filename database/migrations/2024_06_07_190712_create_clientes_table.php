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
            $table->id();
            $table->string('nombres', 255);
            $table->string('apellidos', 255);
            $table->string('cedula', 16);
            $table->string('telefono', 13);
            $table->string('direccion', 500);

             
            //Creando la relación con la tabla ciudades
            $table->UnsignedInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            
            //Creando la relación con la tabla departamentos
            $table->UnsignedInteger('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            
            //Creando la relación con la tabla paises
            $table->UnsignedInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
