<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('noticias', function(Blueprint $table)
		{
			$table->foreign('ID_FOTO', 'FK_REF_NOTICIA_FOTO')->references('ID')->on('fotos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_PERFIL', 'FK_REF_NOTICIA_PERFIL')->references('ID')->on('perfiles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TIPO_NOTICIA', 'FK_REF_NOTICIA_TIPONOTICIA')->references('ID')->on('tipos_noticia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('noticias', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_NOTICIA_FOTO');
			$table->dropForeign('FK_REF_NOTICIA_PERFIL');
			$table->dropForeign('FK_REF_NOTICIA_TIPONOTICIA');
		});
	}

}
