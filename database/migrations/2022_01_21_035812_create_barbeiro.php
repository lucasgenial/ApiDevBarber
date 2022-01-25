<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbeiro extends Migration{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(){
        Schema::create('barbeiro', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255)->nullable()->unique('uniqueNomeBarbeiro');
            $table->string('avatar',255)->default('padrao.png');
            $table->string('email',255)->unique('uniqueEmailBarbeiro');
            $table->float('nota')->default(0);
            $table->string('latitude',255);
            $table->string('longitude',255);

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
        Schema::dropIfExists('barbeiro');
        Schema::enableForeignKeyConstraints();
    }
}
