<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
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

}
