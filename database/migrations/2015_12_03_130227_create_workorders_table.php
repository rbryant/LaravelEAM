<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkordersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workorders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();
			$table->string('wonum');
            $table->string('description');
            $table->longText('longdesc');
            $table->integer('asset')->unsigned();
            $table->integer('priority');
            $table->integer('assignedto')->unsigned();
            $table->integer('team')->unsigned();
            $table->dateTime('duedate');
            $table->integer('status');
            
			$table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			$table->timestamps();
			
			// Adding Indexes
			$table->index('tenant_id');
			$table->index('wonum');
			$table->index('asset');
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
		Schema::drop('workorders');
	}

}
