<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citas', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('NOMBRE', 100)->nullable();
			$table->string('AUTOR', 100)->nullable();
			$table->string('CARGO', 100)->nullable();
			$table->string('DESCRIPCION', 300)->nullable();
			$table->dateTime('FECHA_C')->nullable();
			$table->dateTime('FECHA_M')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citas');
	}

}
