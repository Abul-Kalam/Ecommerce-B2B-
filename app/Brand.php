<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'brands';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'slug'            => 'string',
        'images_url'      => 'array',
        'about'           => 'string',
        'country_id'      => 'string',
        'meta'            => 'array'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
