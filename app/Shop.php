<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'shops';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'slug'           => 'string',
        'title'          => 'string',
        'status'         => 'string',
        'images_url'      => 'array',
        'description'    => 'string',
        'localization'   => 'array',
        'address'        => 'array',
        'meta'           => 'array'
    ];
}
