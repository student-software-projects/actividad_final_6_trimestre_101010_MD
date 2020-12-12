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
            $table->string('placa', 10);
            $table->string('color', 50);
            $table->string('marca', 50);
            $table->string('tipo_vehiculo', 50);
            $table->unsignedBigInteger('conductor_id');
            $table->unsignedBigInteger('propietario_id');
            $table->foreign('conductor_id')->references('id')->on('personas');
            $table->foreign('propietario_id')->references('id')->on('personas');
            $table->softDeletes();
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
        Schema::dropIfExists('vehiculos');
    }
}
