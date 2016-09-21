<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfLokasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inf_lokasi', function(Blueprint $table)
		{
			$table->integer('lokasi_ID', true);
			$table->string('lokasi_kode', 50)->default('')->index('lokasi_kode');
			$table->string('lokasi_nama', 100)->default('');
			$table->integer('lokasi_propinsi')->index('lokasi_propinsi');
			$table->integer('lokasi_kabupatenkota')->unsigned()->nullable()->index('lokasi_kabupatenkota');
			$table->integer('lokasi_kecamatan')->unsigned()->index('lokasi_kecamatan');
			$table->integer('lokasi_kelurahan')->unsigned()->index('lokasi_kelurahan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inf_lokasi');
	}

}
