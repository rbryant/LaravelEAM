<?php namespace App;

use Illuminate\Database\Eloquent\Model;
//use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;
use App\Repositories\Scopes\TenantScope;

class Asset extends Model {

    public static function boot()
    {
        static::addGlobalScope(new TenantScope);
        parent::boot();
    }

    //use TenantScopedModelTrait;
    
    protected $id = 'id';

    /*
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'assets';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['assetnum', 'description', 'status', 'longdesc', 'location_id', 'parent', 'model', 'serial', 'assignedto', 'system'];

    /*
    public function getActiveAssets()
    {
		$assets = Asset::where('status', '<>', '1')->get();
		return $assets;
    }
    
    public function getAssetLocation($locationid) 
    {
		$assetloc = Location::Location($locationid)->first();
		return $assetloc;
    }
    */
    
	/**
	 * An Asset can have one Location.

    */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
  	
  	 
}
