<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('Tbl_phanhoisTableSeeder');
		$this->call('PhanhoisTableSeeder');
		$this->call('ToursTableSeeder');
		$this->call('TintucsTableSeeder');
	}

}
