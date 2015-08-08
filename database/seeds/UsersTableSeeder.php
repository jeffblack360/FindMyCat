<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('users')->insert(array(
            array('id' => 1, 'name' => "admin", 'password' => Hash::make('hunter2'), 'email' => 'admin@domain.com', 'is_admin'=> true),
            array('id' => 2, 'name' => "scott", 'password' => Hash::make('tiger'), 'email' => 'scott@example.com' , 'is_admin'=> false)
        ));
	}
}
