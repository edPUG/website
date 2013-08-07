<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_message', function(Blueprint $table) {
			$table->increments('id');
			$table->string('from_name', 100);
                        $table->string('from_email', 100);
                        $table->string('subject', 100)->nullable();
                        $table->text('message');
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
		Schema::drop('contact_message');
	}

}
