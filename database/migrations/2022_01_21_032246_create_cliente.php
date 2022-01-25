<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(){
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->string('avatar',255)->default('padrao.png');
            $table->string('email',255)->unique('uniqueEmailCliente');

            /* Chave Estrangeiras */
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('cliente');
        Schema::enableForeignKeyConstraints();
    }
}
