<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('CORREO', 100);
			$table->string('CUENTA', 30)->nullable();
			$table->string('CLAVE', 30)->nullable();
			$table->integer('ID_ESTADO')->nullable()->index('FK_REF_ESTADO_USUARIO');
			$table->integer('ID_TIPO_USUARIO')->nullable()->index('FK_REF_TIPO_USUARIO');
			$table->integer('ID_PERSONA')->nullable()->index('FK_REF_USUARIO_PERSONA');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
