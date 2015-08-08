<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JobMarkersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('job_markers')->insert(array(
            array('id'=>1, 'name'=>"RJB Enterprises",
                  'address'=>'939 W El Camino Real, Mountain View, CA',
                  'lat'=>'37.386339',
                  'lng'=>'-122.085823'),
            array('id'=>2, 'name'=>"Perl-R-Us", 
                  'address'=>'790 Castro St, Mountain View, CA',
                  'lat'=>'37.38714',
                  'lng'=>'-122.083235'),
            array('id'=>3, 'name'=>"Web Strategies", 
                  'address'=>'191 Castro St, Mountain View, CA',
                  'lat'=>'37.402653',
                  'lng'=>'-122.078916'),
            array('id'=>4, 'name'=>"SQL Solutions", 
                  'address'=>'570 N Shoreline Blvd, Mountain View, CA',
                  'lat'=>'37.402653',
                  'lng'=>'-122.079354'),
        ));
	}
        //Frankie Johnnie & Luigo Too,"939 W El Camino Real, Mountain View, CA",37.386339,-122.085823
        //Amici's East Coast Pizzeria,"790 Castro St, Mountain View, CA",37.38714,-122.083235
        //Kapp's Pizza Bar & Grill,"191 Castro St, Mountain View, CA",37.393885,-122.078916
        //Round Table Pizza: Mountain View,"570 N Shoreline Blvd, Mountain View, CA",37.402653,-122.079354
        //Tony & Alba's Pizza & Pasta,"619 Escuela Ave, Mountain View, CA",37.394011,-122.095528
        //Oregano's Wood-Fired Pizza,"4546 El Camino Real, Los Altos, CA",37.401724,-122.114646
        
}