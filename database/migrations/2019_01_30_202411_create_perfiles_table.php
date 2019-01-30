<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfiles', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('NOMBRE', 50)->nullable();
			$table->string('DESCRIPCION', 100)->nullable();
			$table->integer('ID_SISTEMA')->nullable()->index('FK_REF_PERFIL_SISTEMA');
			$table->integer('ID_ESTADO_PERFIL')->nullable()->index('FK_REF_ESTADO_PERFIL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perfiles');
	}

}
