<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacao extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id();
            $table->float('nota')->default(0);
            $table->text('mensagem');
            $table->timestamp('data-criacao');

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->unsignedBigInteger('barbeiro_id')->nullable();
            $table->foreign('barbeiro_id')->references('id')->on('barbeiro')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('avaliacao');
        Schema::enableForeignKeyConstraints();
    }
}
