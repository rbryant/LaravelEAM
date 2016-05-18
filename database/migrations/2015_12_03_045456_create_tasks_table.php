<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();
			$table->string('name');
			$table->string('description');
			$table->integer('parent')->unsigned();
			$table->string('priority');
			$table->dateTime('duedate');
			$table->integer('assignedto')->unsigned();
            $table->integer('status');
            
			$table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			$table->timestamps();
			
			// Adding Indexes
			$table->index('tenant_id');
			$table->index('name');
			$table->index('parent');
			$table->index('assignedto');
            $table->index('status');			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
