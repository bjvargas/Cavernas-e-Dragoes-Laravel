<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_classe')->unsigned();
            $table->foreign('id_classe')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->integer('id_raca')->unsigned();
            $table->foreign('id_raca')->references('id')->on('racas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('forca');
            $table->integer('destreza');
            $table->integer('constituicao');
            $table->integer('inteligencia');
            $table->integer('sabedoria');
            $table->integer('carisma');
            $table->integer('vida');
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
        Schema::dropIfExists('personagens');
    }
}