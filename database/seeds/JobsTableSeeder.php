<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JobsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('jobs')->insert(array(
            array('id'=>1, 'name'=>"PHP Developer", 'desc'=>'Must know Laravel', 'salary'=>'90000.00'),
            array('id'=>2, 'name'=>"Perl Developer", 'desc'=>'Module author', 'salary'=>'85000.00'),
            array('id'=>3, 'name'=>"Java Developer", 'desc'=>'Struts2 preferred', 'salary'=>'95000.00'),
            array('id'=>4, 'name'=>"SQL Developer", 'desc'=>'Oracle and Sybase', 'salary'=>'105000.00'),
        ));
	}
}
