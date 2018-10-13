<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'products';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'slug'             => 'string',
        'name'             => 'string',
        'status'           => 'string',
        'description'      => 'string',
        'short_description'=> 'string',
        'variation'        => 'array',
        'meta'             => 'array',
        'image_url'        => 'array',
        'featured'         => 'string', 
        'comment'         => 'array', 
        'rating'           => 'array',
        'video_url'        => 'string',
        'shop_id'          => 'integer'
    ];
}
