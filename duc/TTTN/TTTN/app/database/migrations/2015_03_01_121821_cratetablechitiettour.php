<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cratetablechitiettour extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_chitietdattour',function(Blueprint $table) {
			$table->integer('iddattor')->unsigned();
			$table->integer('idtour')->unsigned();
			$table->string('ngaydi');
			$table->string('khac');
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
