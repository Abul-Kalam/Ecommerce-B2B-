<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thana extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'thanas';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'country_id'      => 'string',
        'slug'            => 'string',
        'localization'    => 'array'
    ];

    public function district()
    {
        return $this->belongsTo('App\District');
    }
    public function shop()
    {
        return $this->belongsToMany('App\Shop');
    }
    
}
