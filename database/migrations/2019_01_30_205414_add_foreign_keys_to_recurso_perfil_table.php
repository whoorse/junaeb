<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecursoPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recurso_perfil', function(Blueprint $table)
		{
			$table->foreign('ID_PERFIL', 'FK_REF_RECURSOPERFIL_PERFIL')->references('ID')->on('perfiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_RECURSO', 'FK_REF_RECURSOPERFIL_RECURSO')->references('ID')->on('recursos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recurso_perfil', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_RECURSOPERFIL_PERFIL');
			$table->dropForeign('FK_REF_RECURSOPERFIL_RECURSO');
		});
	}

}
