<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('placa')->unique();
            $table->foreignId('marca_id')->references('id')->on('marcas')->onDelete('cascade')->nullable()->change();
            $table->foreignId('departamento_id')->references('id')->on('departamentos')->onDelete('cascade')->nullable()->change();
             $table->foreignId('municipio_id')->references('id')->on('municipios')->onDelete('cascade')->nullable()->change();
            $table->timestamps();
            $table->foreignId('propietario_id')->references('id')->on('terceros')->onDelete('cascade')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
