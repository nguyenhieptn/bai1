<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cratetabletintuc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_tintuc',function(Blueprint $table){
			$table->increments('id');
			$table->string('tentt');
			$table->string('chitietngan');
			$table->text('noidung');
			$table->text('anh');
			$table->string('ngayup');
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
