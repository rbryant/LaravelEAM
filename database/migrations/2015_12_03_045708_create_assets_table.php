<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();

			$table->string('assetnum');
			$table->string('description');
			$table->longText('longdesc');
			$table->integer('location_id')->unsigned();
			$table->integer('parent')->unsigned();
			$table->string('model');
			$table->string('serial');
			$table->integer('assignedto')->unsigned();
			$table->integer('system')->unsigned();
            $table->integer('status');
            
			$table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			$table->timestamps();
			
			// Adding Indexes
			$table->index('tenant_id');
			$table->index('assetnum');
			$table->unique(array('tenant_id', 'assetnum'));
			$table->index('location_id');
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
		Schema::drop('assets');
	}

}
