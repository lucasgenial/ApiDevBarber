<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteFavoritos extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_favoritos', function (Blueprint $table) {
            $table->id();

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->unsignedBigInteger('barbeiro_id')->nullable();
            $table->foreign('barbeiro_id')->references('id')->on('barbeiro')->onDelete('cascade');

            /**
             * Restrição no banco que impossibilita o cliente adicionar outra vez o mesmo
             * barbeiro nos favoritos
             * */
            $table->unique(['cliente_id', 'barbeiro_id'], 'uniqueBarbeiroFavorito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('cliente_favoritos');
        Schema::enableForeignKeyConstraints();
    }
}
