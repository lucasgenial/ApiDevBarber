<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompromisso extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('compromisso', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data')->nullable();
            $table->enum('status',['agendado','ausente','compareceu','justificou']);

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->unsignedBigInteger('barbeiro_id')->nullable();
            $table->foreign('barbeiro_id')->references('id')->on('barbeiro')->onDelete('cascade');

            $table->unsignedBigInteger('avaliacao_id');
            $table->foreign('avaliacao_id')->references('id')->on('avaliacao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('compromisso');
        Schema::enableForeignKeyConstraints();
    }
}
