<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\Tenant as Tenant;
use App\Workorder as Workorder;
use App\Location as Location;
use App\Asset as Asset;
use App\Item as Item;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        /*
        *  Create Tenant Records
        */
        Tenant::create(['tenant_name' => 'RAD Consulting Group']);
        /*
        *  Create User Records
        */
        User::create(['first_name' => 'Ron', 'last_name' => 'Bryant', 'password' => Hash::make( 'justdoit' ) , 'email' => 'ron@radcg.net', 'tenant_id' => '1']);
        /*
        *  Create Location Records
        */
        Location::create([
            'tenant_id' => '1',
            'location' => 'Repair', 
            'description' => 'Repair Shop', 
            'address' => 'New York, NY', 
            'enterby' => '1', 
            'changeby' => '1'
        ]);
        Location::create([
            'tenant_id' => '1',
            'location' => 'Production Building', 
            'description' => 'Repair Shop', 
            'address' => 'New York, NY', 
            'enterby' => '1', 
            'changeby' => '1'
        ]);
        Location::create([
            'tenant_id' => '1',
            'location' => 'Site Number 2', 
            'description' => 'Warehouse', 
            'address' => 'New York, NY', 
            'enterby' => '1', 
            'changeby' => '1'
        ]);
        
        /*
        *  Create Asset Records
        */
        Asset::create([
            'tenant_id' => '1',
            'assetnum' => 'P123', 
            'description' => 'Pump 123', 
            'longdesc' => '', 
            'location_id' => '2', 
            'parent' => '', 
            'model' => 'Durco Mark II Group II', 
            'serial' => 'M3216537', 
            'assignedto' => '1', 
            'system' => '',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'
        ]);
        Asset::create([
            'tenant_id' => '1',
            'assetnum' => 'P456', 
            'description' => 'Pump 456', 
            'longdesc' => '', 
            'location_id' => '2', 
            'parent' => '', 
            'model' => 'Durco Mark II Group II', 
            'serial' => 'Z3456803548', 
            'assignedto' => '1', 
            'system' => '',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'      
        ]);
        Asset::create([
            'tenant_id' => '1',
            'assetnum' => 'T123', 
            'description' => 'Tank 123', 
            'longdesc' => '', 
            'location_id' => '2', 
            'parent' => '', 
            'model' => 'None', 
            'serial' => 'M3256489', 
            'assignedto' => '1', 
            'system' => '',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'           
        ]);
        Asset::create([
            'tenant_id' => '1',
            'assetnum' => 'P789', 
            'description' => 'Pump 789', 
            'longdesc' => '', 
            'location_id' => '1', 
            'parent' => '', 
            'model' => '', 
            'serial' => '35468435', 
            'assignedto' => '1', 
            'system' => '',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'           
        ]);
        Asset::create([
            'tenant_id' => '1',
            'assetnum' => 'V346534', 
            'description' => 'Pickup Truck', 
            'longdesc' => '', 
            'location_id' => '2', 
            'parent' => '', 
            'model' => 'Chevy Silverado 2500HD', 
            'serial' => 'VIN23598571945867', 
            'assignedto' => '1', 
            'system' => '',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'           
        ]);        
        /*
        *  Create Work Order Records
        */
        Workorder::create([
            'tenant_id' => '1',
            'wonum' => 'WO000001',
            'description' => 'Replace Pipe', 
            'longdesc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ', 
            'asset' => '1', 
            'priority' => '3', 
            'assignedto' => '1',
            'enterby' => '1', 
            'changeby' => '1',
            'status' => '1'
        ]);
        Workorder::create([
            'tenant_id' => '1',
            'wonum' => 'WO000002',
            'description' => 'Repair a Pump', 
            'longdesc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ',
            'asset' =>'4', 
            'priority' => '3', 
            'assignedto' =>'',
            'enterby' => '1', 
            'changeby' => '1',
            'status' => '2'
        ]);
        Workorder::create([
            'tenant_id' => '1',
            'wonum' => 'WO000003',
            'description' => 'Build a gaurd rail', 
            'longdesc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ',
            'asset' =>'2', 
            'priority' => '2', 
            'assignedto' =>'',
            'enterby' => '1', 
            'changeby' => '1',
            'status' => '3'
        ]);
        Workorder::create([
            'tenant_id' => '1',
            'wonum' => 'WO000004',
            'description' => 'Plow Snow', 
            'longdesc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. ',
            'asset' =>'2', 
            'priority' => '2', 
            'assignedto' =>'1',
            'enterby' => '1', 
            'changeby' => '1',
            'status' => '4'
        ]);
        
        /*
        *  Create Item Records
        */
        Item::create([
            'tenant_id' => '1',
            'name' => 'BRG154397',
            'description' => 'Bearing, Roller, Sealed, SS', 
            'stdcost' => '120.00', 
            'class_id' => '1',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'
         ]);
        Item::create([
            'tenant_id' => '1',
            'name' => 'MTR453453',
            'description' => 'Motor, Electric, 50HP, T56 Frame', 
            'stdcost' => '640.00', 
            'class_id' => '2',
            'status' => '2',
            'enterby' => '1', 
            'changeby' => '1'
         ]); 
         
         
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}


}
