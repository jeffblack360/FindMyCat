<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobMarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_markers', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('name');
                        $table->string('address');
                        $table->double('lat',10, 6);
                        $table->double('lng', 10, 6);
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
		Schema::drop('job_markers');
	}

}
