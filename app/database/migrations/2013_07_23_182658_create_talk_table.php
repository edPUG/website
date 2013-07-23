<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
  {
    Schema::create('talks', function($table)
    {
      $table->increments('id');
      $table->integer('sort_order')->unsigned()->nullable();
      $table->string('title');
      $table->text('description');
      $table->string('image');
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
		//
	}

}
