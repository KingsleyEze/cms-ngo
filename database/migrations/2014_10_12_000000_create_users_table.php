<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('member_type');
			$table->string('donor_type');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address');
			$table->string('city');
			$table->string('home');
			$table->string('work');
			$table->string('email')->unique();
			$table->string('show_name');
			$table->string('vol_interest');
			$table->string('vol_type');
			$table->string('unit_donor');
			$table->string('donate_mode');
			$table->string('mode_payment');
			$table->string('amount');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
