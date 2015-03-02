<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cratetableamthuc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_amthuc',function(Blueprint $table){
			$table->increments('id');
			$table->string('tenamthuc');
			$table->string('chitietngan');
			$table->text('chitietdai');
			$table->string('images');
		});
	}


	public function down()
	{
		//
	}

}
