<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Division extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'divisions';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'country_id'      => 'integer',
        'slug'            => 'string',
        'localization'    => 'array'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }

    public function districts()
    {
        return $this->belongsToMany('App\District');
    }
}
