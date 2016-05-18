<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Gravatar;
use Auth;
use App\Repositories\Scopes\TenantScope;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
    
    public static function boot()
    {
        static::addGlobalScope(new TenantScope);
        parent::boot();
    }

    //use TenantScopedModelTrait;
    
    protected $id = 'id';
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'email', 'password', 'tenant_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * Get the e-mail address of the user.
     *
     * @requires user email
     */
    public function setGravatarAttribute()
    {
        if(Auth::check()){
            $user = Auth::user();
            $email = $user->email;
            $gravatar = Gravatar::get($email);
            $this->attributes['gravatar'] = $gravatar;
        }
    }
    public function setFullNameAttribute()
    {
        if(Auth::check()){
            $user = Auth::user();
            $fullname = $user->first_name . ' ' . $user->last_name;
            $this->attributes['full_name'] = $fullname;
        }
    }


    /**
     * Get the e-mail address of the user.
     *
     * @return string
     */    
    public function getEmail()
    {
        return $this->email;
    }
  
	public function tenant()
    {
        return $this->belongsTo('App\Tenant', 'tenant_id');
    }
}
