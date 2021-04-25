<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magias', function (Blueprint $table) {
            $table->increments('id'); // Death
            $table->string('nome');  //Nome da Magia
            $table->string('descricao'); //Descricao
            $table->integer('level'); //level da magia
            $table->string('escola'); //escola de conjuração
            $table->string('tempodeconjuracao'); // tempo de conjuração
            $table->integer('alcance'); //alcance em metros da magia
            $table->string('componentes'); // componenentes necessarios para conjuração
            $table->boolean('verbal'); // boolean S/N para componentes verbais
            $table->boolean('somatico'); // boolean S/N para componentes somaticos
            $table->boolean('material'); // boolean S/N para componentes materiais
            $table->string('duracao'); // Duração da Magia
            $table->string('classe'); // classe que pode utilizar
            $table->string('levelmaior'); //Descrição da magia em niveis maiores
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
        Schema::dropIfExists('magias');
    }
}
