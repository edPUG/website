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
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->integer('sort_order')->unsigned()->nullable();
      $table->string('title');
      $table->text('description');
      $table->string('image');
$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
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
