<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CatsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('cats')->insert(array(
            array('id'=>1, 'name'=>"Buddy",   'breed_id'=>1),
            array('id'=>2, 'name'=>"Cooper",  'breed_id'=>2),
            array('id'=>3, 'name'=>"Chelley", 'breed_id'=>3),
            array('id'=>4, 'name'=>"Maddie",  'breed_id'=>4),
        ));
	}
}
