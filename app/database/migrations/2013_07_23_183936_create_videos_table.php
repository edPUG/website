<?php

use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('videos', function($table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('sort_order');
      $table->string('title');
      $table->text('description');
      $table->string('url');
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
