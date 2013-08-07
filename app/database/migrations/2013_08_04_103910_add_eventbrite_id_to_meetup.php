<?php

use Illuminate\Database\Migrations\Migration;

class AddEventbriteIdToMeetup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('meetups', function($table)
		{
			$table->integer('eventbrite_id')->unsigned()->after('id');
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
