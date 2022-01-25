<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServico extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servico', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable();
            $table->string('descricacao', 255)->nullable();
            $table->boolean('ativo')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('servico');
        Schema::enableForeignKeyConstraints();
    }
}
