<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCashadvancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cashadvances', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('employees_name', 300)->nullable();
			$table->string('home_address', 1000)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('contact_details', 1000)->nullable();
			$table->string('requested_amount', 45)->nullable();
			$table->string('reason', 3000)->nullable();
			$table->string('terms', 45)->nullable();
			$table->string('amount', 45)->nullable();
			$table->date('repayment_date')->nullable();
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
		Schema::drop('cashadvances');
	}

}
