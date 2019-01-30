<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->foreign('ID_ESTADO', 'FK_REF_ESTADO_USUARIO')->references('ID')->on('estados_usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TIPO_USUARIO', 'FK_REF_TIPO_USUARIO')->references('ID')->on('tipos_usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_PERSONA', 'FK_REF_USUARIO_PERSONA')->references('ID')->on('personas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_ESTADO_USUARIO');
			$table->dropForeign('FK_REF_TIPO_USUARIO');
			$table->dropForeign('FK_REF_USUARIO_PERSONA');
		});
	}

}
