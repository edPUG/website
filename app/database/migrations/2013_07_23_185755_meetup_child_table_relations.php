<?php

use Illuminate\Database\Migrations\Migration;

class MeetupChildTableRelations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('videos', function($table)
    {
      $table->integer('meetup_id')->unsigned()->after('id')->nullable();
      $table->foreign('meetup_id')->references('id')->on('meetups')->onDelete('set null');     
    });
    
		Schema::table('talks', function($table)
    {
      $table->integer('meetup_id')->unsigned()->after('id')->nullable();
      $table->foreign('meetup_id')->references('id')->on('meetups')->onDelete('set null');     
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