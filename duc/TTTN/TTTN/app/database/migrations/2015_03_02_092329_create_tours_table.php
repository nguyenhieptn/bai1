<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tentour');
			$table->string('chitietngan');
			$table->string('chitietdai');
			$table->string('images');
			$table->string('gia');
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
		Schema::drop('tours');
	}

}
