<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anggota', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('callsign',8);
		    $table->string('nama',50);
		    $table->string('nri', 10);
		    $table->date('kta');
		    $table->string('noktp', 25)->nullable();
		    $table->enum('sex',['L','P']);
		    $table->integer('idlokasi');
		    $table->date('tgllahir');
		    $table->string('alamat');
		    $table->enum('agama',['I','K','P','H','B']);
		    $table->enum('goldarah',['A','B','AB','O']);
		    $table->string('idprofesi','2');
		    $table->string('telepon',15)->nullable();
		    $table->string('email',30)->nullable();
		    $table->string('noskar',50);
		    $table->date('tglskar');
		    $table->string('noiar',15);
		    $table->date('tgliar');
		    $table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anggota');
	}

}
