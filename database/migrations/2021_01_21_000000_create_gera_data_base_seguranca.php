<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeraDataBaseSeguranca extends Migration {

    public function up(){
        Schema::create('permissao', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->unique('uniqueNomePermissao');
            $table->string('descricao', 255)->nullable();
            $table->timestamp('email_verificado_em')->nullable();
            $table->rememberToken();
            $table->boolean('ativo')->nullable()->default(false);

            //$table->unique(['id'], 'uniqueIdPermissao');
        });

        Schema::create('categoria-usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->unique('uniqueNomeCategoriaUsuario');
            $table->string('descricao', 255)->nullable();
            $table->boolean('ativo')->nullable()->default(false);

            //$table->unique(['id'], 'uniqueIdCategoriaUsuario');
        });

		Schema::create('usuario', function (Blueprint $table) {
            $table->id();
			$table->string('login', 255)->nullable()->unique('uniqueLoginUsuario');
			$table->string('senha', 255)->nullable();
			$table->boolean('ativo')->nullable()->default(false);

			$table->unsignedBigInteger('categoria-usuario_id')->nullable();
			$table->foreign('categoria-usuario_id')->references('id')->on('categoria-usuario');

			//$table->unique(['id'], 'uniqueIdUsuario');
        });

        Schema::create('categoria-usuario_permissao', function (Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('permissao_id')->nullable();
            $table->unsignedBigInteger('categoria-usuario_id')->nullable();

            $table->foreign('permissao_id')->references('id')->on('permissao')
                ->onDelete('cascade');
			$table->foreign('categoria-usuario_id')->references('id')->on('categoria-usuario')
                ->onDelete('cascade');

			$table->unique(['id'], 'idCategoria-Usuario_permissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
		/*Sequencia de Exclusão*/
		Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('categoria-usuario_permissao');
		Schema::dropIfExists('usuario');
        Schema::dropIfExists('categoria-usuario');
        Schema::dropIfExists('permissao');

		Schema::enableForeignKeyConstraints();
    }
}
