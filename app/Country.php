<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'countries';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'iso2'            => 'string',
        'localization'    => 'array',
        'sell_status'     => 'boolean',
        'buy_status'      => 'boolean',
        'currency'        => 'array',
        'image_urls'      => 'array'
    ];

    public function divisions()
    {
        return $this->belongsToMany('App\Division');
    }
}
