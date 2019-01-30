<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('RUT', 20);
			$table->integer('ID_TIPO_PERSONA')->nullable()->index('FK_REF_PERSONA_TIPOPERSONA');
			$table->string('NOMBRE', 50)->nullable();
			$table->string('APELLIDO_P', 50)->nullable();
			$table->string('APELLIDO_M', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
