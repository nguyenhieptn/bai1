<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTour extends Migration {

	/**
	 * Run the migrations.
	 *
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_tour',function(Blueprint $table){
			$table->increments('id');
			$table->string('tentour');
			$table->string('chitietngan');
			$table->text('chitietdai');
			$table->string('images');
			$table->timestamps();
			$table->string('gia');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
