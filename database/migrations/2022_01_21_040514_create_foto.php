<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoto extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->timestamp('data-adicao');

            /* Chave Estrangeiras */
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
        Schema::dropIfExists('foto');
        Schema::enableForeignKeyConstraints();
    }
}
