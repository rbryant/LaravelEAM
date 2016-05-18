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
			$table->string('first_name');
			$table->string('last_name');
			$table->string('full_name');
			$table->string('gravatar');
			$table->string('office_phone');
			$table->string('mobile_phone');
			$table->string('title');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('tenant_id')->unsigned();
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
