<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recursos', function(Blueprint $table)
		{
			$table->foreign('ID_SISTEMA', 'FK_REF_RECURSO_SISTEMA')->references('ID')->on('sistema')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recursos', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_RECURSO_SISTEMA');
		});
	}

}
