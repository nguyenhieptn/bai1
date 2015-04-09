<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
            array(
                'email' => 'admin@tungfpm-blog.vn',
                'password' => Hash::make('tungzpm'),
                'is_admin' => 1,
                'first_name' => 'Pham',
                'last_name' => 'Tung'
            ),
            array(
                'email' => 'admin@gmail.com',
                'password' => Hash::make('tungzpm'),
                'is_admin' => 1,
                'first_name' => 'Manh',
                'last_name' => 'Tung'
            ),
            array(
                'email' => 'tungfpm@tungfpm-blog.vn',
                'password' => Hash::make('tungzpm'),
                'is_admin' => 1,
                'first_name' => 'Pham Manh',
                'last_name' => 'Tung'
            )
		);

        DB::table('users')->insert($users);
		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
