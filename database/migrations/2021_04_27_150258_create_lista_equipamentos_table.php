<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_equipamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');

            $table->foreignId('personagem_id')->constrained('personagens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('equipamento_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_equipamentos');
    }
}
