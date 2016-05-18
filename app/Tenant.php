<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Tenant extends Model {

	/*
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tenants';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tenant_name'];


    public function user()
      {
        return $this->belongsToMany('App\User');
      }
    
}
