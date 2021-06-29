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
            $table->id();
            $table->string('nome');
            $table->integer('forca');
            $table->integer('destreza');
            $table->integer('constituicao');
            $table->integer('inteligencia');
            $table->integer('sabedoria');
            $table->integer('carisma');
            $table->integer('vida');

            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('classe_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('raca_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

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
