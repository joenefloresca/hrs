<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOvertimeApplicationHeaderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overtime_application_header', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 300)->nullable();
			$table->string('employee_no', 300)->nullable();
			$table->string('department', 1000)->nullable();
			$table->integer('submitted_by_id')->nullable();
			$table->integer('status')->nullable()->default(0);
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
		Schema::drop('overtime_application_header');
	}

}
