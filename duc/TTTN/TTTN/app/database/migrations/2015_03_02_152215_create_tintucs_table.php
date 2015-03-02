<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTintucsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tintucs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tentt');
			$table->string('chitietngan');
			$table->text('noidung');
			$table->string('anh');
			$table->string('ngayup');
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
		Schema::drop('tintucs');
	}

}
