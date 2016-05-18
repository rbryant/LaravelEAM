<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Routing\Middleware;
use AuraIsHere\LaravelMultiTenant\TenantScope;
use Illuminate\Contracts\Auth\Guard;


class TenantGlobalScope implements Middleware {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;
	
	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

	}


	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	    $tenantId = Auth::user()->tenant_id;
	    $tenant = new TenantScope;
	    $tenant->addTenant('tenant_id', $tenantId);
	    //dd($tenant);
		return $next($request);
	}

}
