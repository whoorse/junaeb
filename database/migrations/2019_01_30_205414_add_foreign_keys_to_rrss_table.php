<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRrssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rrss', function(Blueprint $table)
		{
			$table->foreign('ID_TIPO_RRSS', 'FK_REF_RRSS_TIPORRSS')->references('ID')->on('tipos_rrss')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rrss', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_RRSS_TIPORRSS');
		});
	}

}
