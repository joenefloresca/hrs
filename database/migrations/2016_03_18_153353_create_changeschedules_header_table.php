<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChangeschedulesHeaderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('changeschedules_header', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('employee_name', 300)->nullable();
			$table->string('department', 300)->nullable();
			$table->string('change_type', 300)->nullable();
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
		Schema::drop('changeschedules_header');
	}

}
