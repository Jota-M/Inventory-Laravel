<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_outputs', function (Blueprint $table) {
            $table->id();
            
            // Relación con materials
            $table->foreignId('material_id')->constrained()->onDelete('cascade');

            // Cantidad de salida
            $table->integer('quantity');
            // Fecha de salida
            $table->date('date')->nullable();
            // Entregado a (persona o unidad)
            $table->string('delivered_to')->nullable();
            // Responsable de registrar la salida
            $table->string('responsible')->nullable();
            // Motivo u observación
            $table->text('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_outputs');
    }
};
