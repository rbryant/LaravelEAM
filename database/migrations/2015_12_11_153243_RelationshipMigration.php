<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('relationships', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tenant_id')->unsigned();
			$table->string('name');
            $table->string('description');
			$table->string('tbname');
			$table->string('joinby');
			$table->string('whereclause');

			$table->integer('enterby')->unsigned();
			$table->integer('changeby')->unsigned();
			$table->timestamps();

            // Adding Indexes
			$table->index('tenant_id');
			$table->unique('name');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('relationships');
	}

}
