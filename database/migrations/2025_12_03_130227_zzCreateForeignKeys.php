<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class ZzCreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    
		//Adding foreign keys - Users
		Schema::table('users', function(Blueprint $table)
        {
           $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
        
		// Adding Foreign Keys - Locations
		Schema::table('locations', function(Blueprint $table)
        {
			$table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
			$table->foreign('enterby')->references('id')->on('users');
			$table->foreign('changeby')->references('id')->on('users');
        });	
        
        // Adding Foreign Keys - Tasks
		Schema::table('tasks', function(Blueprint $table)
        {
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->foreign('parent')->references('id')->on('locations');
        });
            
        // Adding foreign keys - Assets
		Schema::table('assets', function(Blueprint $table)
        {
        	$table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
			$table->foreign('location_id')->references('id')->on('locations');
			//$table->foreign('parent')->references('id')->on('locations');
			$table->foreign('assignedto')->references('id')->on('users');
			$table->foreign('enterby')->references('id')->on('users');
			$table->foreign('changeby')->references('id')->on('users');
        });	
			
		Schema::table('workorders', function(Blueprint $table)
        {
			$table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
			$table->foreign('enterby')->references('id')->on('users');
			$table->foreign('changeby')->references('id')->on('users');
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
	    
	}

}


