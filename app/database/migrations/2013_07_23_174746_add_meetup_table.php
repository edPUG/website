<?php

use Illuminate\Database\Migrations\Migration;

class AddMeetupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
  {
    Schema::create('meetups', function($table)
    {
      $table->increments('id');
      $table->date('start_date');
      $table->time('start_time');
      $table->integer('duration_minutes')->unsigned()->default(120);
      $table->text('description')->nullable();
      $table->text('resources')->nullable();
      $table->boolean('active')->default(false);
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
    Schema::dropIfExists('meetups');
	}

}
