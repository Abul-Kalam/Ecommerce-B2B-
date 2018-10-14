<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements JWTSubject
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_login_at', 'last_login_ip',
    ];



    protected $casts      = [
        'name'           => 'string',
        'email'           => 'string',
        'first_name'           => 'string',
        'last_name'           => 'string',
        'password'           => 'string',
        'localization'   => 'array',
        'about'    => 'string',
        'avatar_url'    => 'string',
        'shipping_address'   => 'array',
        'billing_address'    => 'array'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function shops()
    {
        return $this->belongsToMany('App\User');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }
    public function division()
    {
        return $this->belongsTo('App\Division');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function thana()
    {
        return $this->belongsTo('App\Thana');
    }

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
