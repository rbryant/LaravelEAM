<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {


	/*
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['location', 'description', 'address', 'enterby', 'changeby'];

    /*
    public function scopeLocation($query, $assetloc)
    {
        return $query->where('id', $assetloc);
    }
    */

}
