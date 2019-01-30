<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosPerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios_perfiles', function(Blueprint $table)
		{
			$table->integer('ID_USUARIO')->nullable()->index('FK_REF_USUARIO_PERFILES');
			$table->integer('ID_PERFIL')->nullable()->index('FK_REF_USUARIO_PERFIL');
			$table->integer('ID_SISTEMA')->nullable()->index('FK_REF_USUARIO_SISTEMA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios_perfiles');
	}

}
