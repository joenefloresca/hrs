<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaverequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leaverequests', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('employee_name', 300)->nullable();
			$table->string('employee_id', 300)->nullable();
			$table->date('from_date')->nullable();
			$table->date('to_date')->nullable();
			$table->string('leave_type', 300)->nullable();
			$table->string('department', 300)->nullable();
			$table->text('notes')->nullable();
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
		Schema::drop('leaverequests');
	}

}
