<?php

namespace App\Repositories;

use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class WoRepository extends BaseRepository implements CacheableInterface {

    use TenantScopedModelTrait;
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Workorder";
    }
    
        /**
	 * Auto Numbering for Work Orders
	 *
	 * @var array
	 */
	public function getNextWonum()
    {
        // Get the last created order
        $last = Workorder::orderBy('created_at', 'desc')->first();
    
        if ( ! $last )
            // We get here if there is no wonum at all
            // If there is no number set it to 0, which will be 1 at the end.
    
            $number = 0;
        else 
            $number = substr($last->wonum, 2);
    
        // If we have WO000001 in the database then we only want the number
        // So the substr returns this 000001
    
        // Add the string in front and higher up the number.
        // the %06d part makes sure that there are always 6 numbers in the string.
        // so it adds the missing zero's when needed.
     
        return 'WO' . sprintf('%06d', intval($number) + 1);
    }
}