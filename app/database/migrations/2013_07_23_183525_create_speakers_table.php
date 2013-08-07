<?php

use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
  {
    Schema::create('speakers', function($table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('forename');
      $table->string('surname');
      $table->text('bio');
      $table->string('image');
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
