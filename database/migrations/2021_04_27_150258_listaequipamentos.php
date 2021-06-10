<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Listaequipamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaEquipamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_personagem')->unsigned();
            $table->foreign('id_personagem')->references('id')->on('personagens')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_equipamento')->unsigned();
            $table->foreign('id_equipamento')->references('id')->on('equipamentos');
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listaEquipamentos');
    }
}
