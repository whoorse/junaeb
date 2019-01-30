<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('perfiles', function(Blueprint $table)
		{
			$table->foreign('ID_ESTADO_PERFIL', 'FK_REF_ESTADO_PERFIL')->references('ID')->on('estados_perfiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_SISTEMA', 'FK_REF_PERFIL_SISTEMA')->references('ID')->on('sistema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('perfiles', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_ESTADO_PERFIL');
			$table->dropForeign('FK_REF_PERFIL_SISTEMA');
		});
	}

}
