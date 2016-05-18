<?php namespace App\Repositories\Scopes;
 
trait TenantTrait {
 
	/**
	 * Boot the scope.
	 * 
	 * @return void
	 */
	public static function bootTenantTrait()
	{
		static::addGlobalScope(new TenantScope);
	}
 
}
