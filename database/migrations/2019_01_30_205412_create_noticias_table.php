<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('TITULO', 100)->nullable();
			$table->string('SUBTITULO', 100)->nullable();
			$table->string('RESENA', 100)->nullable();
			$table->string('DESCRIPCION', 500)->nullable();
			$table->dateTime('FECHA_C')->nullable();
			$table->dateTime('FECHA_M')->nullable();
			$table->integer('ID_TIPO_NOTICIA')->nullable()->index('FK_REF_NOTICIA_TIPONOTICIA');
			$table->integer('ID_PERFIL')->nullable()->index('FK_REF_NOTICIA_PERFIL');
			$table->integer('ID_FOTO')->nullable()->index('FK_REF_NOTICIA_FOTO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticias');
	}

}
