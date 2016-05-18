<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();
			
			$table->string('location');
			$table->string('description');
			$table->string('address');

			$table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			$table->timestamps();
		
		    // Adding Indexes
			$table->index('tenant_id');
			$table->index('address');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
