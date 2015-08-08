<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssociateUsersCats extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            //
            Schema::table('users', function(Blueprint $table)
		{
                    $table->boolean('is_admin');
		});
            Schema::table('cats', function(Blueprint $table)
		{
                    $table->integer('user_id')->nullable()->references('id')->on('users');
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
            Schema::table('cats', function(Blueprint $table) {
                $table->dropColumn('user_id');
                });
            Schema::table('users', function(Blueprint $table) {
                $table->dropColumn('is_admin');
                });
	}

}