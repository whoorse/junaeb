<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecursoPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recurso_perfil', function(Blueprint $table)
		{
			$table->integer('ID_PERFIL')->nullable()->index('FK_REF_RECURSOPERFIL_PERFIL');
			$table->integer('ID_RECURSO')->nullable()->index('FK_REF_RECURSOPERFIL_RECURSO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recurso_perfil');
	}

}
