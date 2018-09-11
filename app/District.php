<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'districts';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'country_id'      => 'string',
        'slug'            => 'string',
        'localization'    => 'array'
    ];

    public function division()
    {
        return $this->belongsTo('App\divisions');
    }
    
    public function thanas()
    {
        return $this->belongsToMany('App\Thana');
    }
}
