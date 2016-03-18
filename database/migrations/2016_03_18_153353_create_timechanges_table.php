<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimechangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timechanges', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('employee_name', 300)->nullable();
			$table->date('dateto_change')->nullable();
			$table->string('work_schedule', 300)->nullable();
			$table->string('clock_in', 300)->nullable();
			$table->string('clock_out', 300)->nullable();
			$table->string('change_reason', 300)->nullable();
			$table->string('no_inout_reason', 300)->nullable();
			$table->string('form_required', 300)->nullable();
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
		Schema::drop('timechanges');
	}

}
