<?php namespace App;

use Illuminate\Database\Eloquent\Model;
//use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;
use App\Repositories\Scopes\TenantScope;

class Workorder extends Model {
    
    public static function boot()
    {
        static::addGlobalScope(new TenantScope);
        parent::boot();
    }
    //use TenantScopedModelTrait;
	
	/*
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'workorders';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['description', 'longdesc', 'asset', 'priority', 'assignedto', 'team', 'duedate'];
	
    
	/**
	 * An Work Order can have one Asset.
	 */
    public function asset()
    {
        return $this->hasOne('App\Asset');
    }


    /**
	 * An Work Order can have one Assigned to
	 */
    public function assignedto()
    {
        return $this->hasOne('App\User');
    }

    /**
	 * An Work Order can have one Team
	 */
    public function team()
    {
        return $this->hasOne('App\Team');
    }
}
