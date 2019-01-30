<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRrssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rrss', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('NOMBRE', 100)->nullable();
			$table->integer('ID_TIPO_RRSS')->nullable()->index('FK_REF_RRSS_TIPORRSS');
			$table->string('URL', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rrss');
	}

}
