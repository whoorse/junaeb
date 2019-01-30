<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fotos', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('NOMBRE', 100)->nullable();
			$table->string('DESCRIPCION', 300)->nullable();
			$table->dateTime('FECHA_C')->nullable();
			$table->dateTime('FECHA_M')->nullable();
			$table->integer('ID_TIPO_FOTO')->nullable()->index('FK_REF_FOTO_TIPOFOTO');
			$table->binary('IMAGEN', 65535)->nullable();
			$table->string('RUTA', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fotos');
	}

}
