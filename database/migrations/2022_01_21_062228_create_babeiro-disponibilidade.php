<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabeiroDisponibilidade extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('babeiro-disponibilidade', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable();
            $table->text('horas')->nullable();

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('barbeiro_id')->nullable();
            $table->foreign('barbeiro_id')->references('id')->on('barbeiro')->onDelete('cascade');

            $table->unique(['data', 'barbeiro_id'], 'uniqueDisponibilidadeBarbeiro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('babeiro-disponibilidade');
        Schema::enableForeignKeyConstraints();
    }
}
