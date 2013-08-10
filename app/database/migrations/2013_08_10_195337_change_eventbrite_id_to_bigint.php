<?php

use Illuminate\Database\Migrations\Migration;

class ChangeEventbriteIdToBigint extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
  {
    DB::statement('ALTER TABLE meetups MODIFY COLUMN eventbrite_id BIGINT');
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
