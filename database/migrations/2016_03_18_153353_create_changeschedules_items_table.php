<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChangeschedulesItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('changeschedules_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('changeschedules_header_id')->nullable();
			$table->date('date_affected')->nullable();
			$table->string('current_schedule', 300)->nullable();
			$table->string('new_schedule', 300)->nullable();
			$table->string('reason', 300)->nullable();
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
		Schema::drop('changeschedules_items');
	}

}
