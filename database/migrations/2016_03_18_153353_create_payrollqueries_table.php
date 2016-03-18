<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayrollqueriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payrollqueries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 300)->nullable();
			$table->date('date')->nullable();
			$table->string('department', 45)->nullable();
			$table->string('payroll', 45)->nullable();
			$table->string('inquiry', 3000)->nullable();
			$table->string('recieved_by', 45)->nullable();
			$table->date('date_recieved_by')->nullable();
			$table->string('action_taken', 300)->nullable();
			$table->string('feedback_given', 300)->nullable();
			$table->date('date_feedback_given')->nullable();
			$table->string('acknowledge', 1000)->nullable();
			$table->date('date_acknowledge')->nullable();
			$table->integer('submitted_by_id')->nullable();
			$table->integer('status')->nullable();
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
		Schema::drop('payrollqueries');
	}

}
