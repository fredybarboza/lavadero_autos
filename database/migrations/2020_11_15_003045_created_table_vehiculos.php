<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedTableVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('vehiculos', function(blueprint $table){
            $table->id();
            $table->integer('id_usuario');
            $table->integer('id_categoria');
            $table->string('marca',255);
            $table->string('modelo',255);
            $table->string('chapa',255);
            $table->string('color,',255);
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
