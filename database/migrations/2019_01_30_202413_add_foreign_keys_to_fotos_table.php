<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotos', function(Blueprint $table)
		{
			$table->foreign('ID_TIPO_FOTO', 'FK_REF_FOTO_TIPOFOTO')->references('ID')->on('tipos_fotos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fotos', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_FOTO_TIPOFOTO');
		});
	}

}
