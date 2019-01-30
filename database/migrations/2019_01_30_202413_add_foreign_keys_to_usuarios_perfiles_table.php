<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosPerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios_perfiles', function(Blueprint $table)
		{
			$table->foreign('ID_PERFIL', 'FK_REF_USUARIO_PERFIL')->references('ID')->on('perfiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_USUARIO', 'FK_REF_USUARIO_PERFILES')->references('ID')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_SISTEMA', 'FK_REF_USUARIO_SISTEMA')->references('ID')->on('sistema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios_perfiles', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_USUARIO_PERFIL');
			$table->dropForeign('FK_REF_USUARIO_PERFILES');
			$table->dropForeign('FK_REF_USUARIO_SISTEMA');
		});
	}

}
