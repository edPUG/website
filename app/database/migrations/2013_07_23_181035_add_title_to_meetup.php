<?php

use Illuminate\Database\Migrations\Migration;

class AddTitleToMeetup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
  {
    Schema::table('meetups', function($table)
    {
      $table->string('title', 75)->after('id');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	}

}
