<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recursos', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->integer('ID_SISTEMA')->nullable()->index('FK_REF_RECURSO_SISTEMA');
			$table->string('NOMBRE', 50);
			$table->string('ENLACE', 300);
			$table->integer('ID_MAESTRO')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recursos');
	}

}
