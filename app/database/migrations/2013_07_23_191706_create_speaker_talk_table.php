<?php

use Illuminate\Database\Migrations\Migration;

class CreateSpeakerTalkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('speaker_talk', function($table)
    {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('speaker_id')->unsigned();
      $table->integer('talk_id')->unsigned();
      $table->integer('sort_order')->unsigned()->nullable();
      
      $table->foreign('speaker_id')->references('id')->on('speakers')->onDelete('cascade');
      $table->foreign('talk_id')->references('id')->on('talks')->onDelete('cascade');
      
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