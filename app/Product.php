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
        'title'            => 'string',
        'status'           => 'string',
        'description'      => 'string',
        'short-description'=> 'string',
        'variation'        => 'array',
        'sku'              => 'string',
        'meta'             => 'array',
        'image_url'        => 'array',
        'likes'            => 'string',
        'manage_stock'     => 'string',
        'featured'         => 'array', 
        'rating'           => 'array',
        'video_url'        => 'string',
        'shop-id'          => 'integer'
    ];
}
