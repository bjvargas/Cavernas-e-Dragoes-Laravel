<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListaMagias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('listaMagias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_personagem')->unsigned();
            $table->foreign('id_personagem')->references('id')->on('personagens')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_magia')->unsigned();
            $table->foreign('id_magia')->references('id')->on('magias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listaMagias');
    }
}
