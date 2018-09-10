<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class District extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'categories';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'slug'           => 'string',
        'image_url'      => 'array',
        'description'    => 'string',
        'localization'   => 'array',
        'options'        => 'array',
        'meta'           => 'array'
    ];
}
