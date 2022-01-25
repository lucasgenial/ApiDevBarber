<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbeiroServico extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('barbeiro-servico', function (Blueprint $table) {
            $table->id();
            $table->float('preco')->default(0);
            $table->boolean('ativo')->default(false);

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('servico_id')->nullable();
            $table->foreign('servico_id')->references('id')->on('servico');

            $table->unsignedBigInteger('barbeiro_id')->nullable();
            $table->foreign('barbeiro_id')->references('id')->on('barbeiro');

            /** Adiciona Apenas 1 tipo de serviço por barbeiro */
            $table->unique(['barbeiro_id', 'servico_id'], 'uniqueBarbeiroServico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('barbeiro-servico');
        Schema::enableForeignKeyConstraints();
    }
}
