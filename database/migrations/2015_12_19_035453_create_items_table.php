<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();
			$table->string('name');
			$table->string('description');
			$table->double('stdcost');
			$table->integer('class_id');
            $table->integer('status');
            
            $table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			
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
		Schema::drop('items');
	}

}
