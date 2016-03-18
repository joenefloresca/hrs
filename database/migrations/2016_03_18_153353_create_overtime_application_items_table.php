<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOvertimeApplicationItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overtime_application_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('overtime_application_header_id')->nullable();
			$table->date('date')->nullable();
			$table->date('from')->nullable();
			$table->date('to')->nullable();
			$table->float('no_of_hours', 10, 0)->nullable();
			$table->string('reason', 1000)->nullable();
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
		Schema::drop('overtime_application_items');
	}

}
