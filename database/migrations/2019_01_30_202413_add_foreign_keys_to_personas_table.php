<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas', function(Blueprint $table)
		{
			$table->foreign('ID_TIPO_PERSONA', 'FK_REF_PERSONA_TIPOPERSONA')->references('ID')->on('tipo_personas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personas', function(Blueprint $table)
		{
			$table->dropForeign('FK_REF_PERSONA_TIPOPERSONA');
		});
	}

}
