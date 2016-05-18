<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Scopes\TenantScope;

class Item extends Model {

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
	protected $table = 'items';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','description','stdcost','class_id','status'];

}
