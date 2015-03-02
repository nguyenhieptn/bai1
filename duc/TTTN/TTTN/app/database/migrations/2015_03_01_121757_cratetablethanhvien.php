<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cratetablethanhvien extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_thanhvien',function(Blueprint $table){
			$table->increments('id');
			$table->string('user');
			$table->string('pass');
			$table->string('hoten');
			$table->string('gioitinh');
			$table->string('diachi');
			$table->string('email');
			$table->string('socmt');
			$table->string('dt');
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
