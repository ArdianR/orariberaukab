<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInfLokasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inf_lokasi', function(Blueprint $table)
		{
			$table->string('lokasi_propinsi',2)->change();
			$table->string('lokasi_kabupatenkota',2)->nullable()->change();
			$table->string('lokasi_kecamatan',2)->change();
			$table->string('lokasi_kelurahan',2)->change();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inf_lokasi', function(Blueprint $table)
		{
			$table->integer('lokasi_propinsi')->index('lokasi_propinsi')->change();
			$table->integer('lokasi_kabupatenkota')->unsigned()->nullable()->index('lokasi_kabupatenkota')->change();
			$table->integer('lokasi_kecamatan')->unsigned()->index('lokasi_kecamatan')->change();
			$table->integer('lokasi_kelurahan')->unsigned()->index('lokasi_kelurahan')->change();
		});
	}

}
