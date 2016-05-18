<?php namespace App\Repositories\Scopes;
 
use Illuminate\Database\Query\Builder as BaseBuilder;
 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ScopeInterface;
use Auth;

class TenantScope implements ScopeInterface {
 
	/**
	 * Apply scope on the query.
	 * 
	 * @param \Illuminate\Database\Eloquent\Builder  $builder
	 * @param \Illuminate\Database\Eloquent\Model  $model
	 * @return void
	 */
	public function apply(Builder $builder, Model $model)
	{
		//if(Auth::check()){
		    $column = 'tenant_id';
 
		    $builder->where($column, '=', Auth::user()->tenant_id);
		    
		//}

	}
	
	public function remove(Builder $builder, Model $model)
	{
	 //   
	}
}