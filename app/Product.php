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

    protected $casts         = [
        'slug'              => 'string',
        'name'              => 'string',
        'shop_id'           => 'integer',
        'title'             => 'string',
        'status'            => 'string',
        'short_description' => 'string',
        'description'       => 'string',
        'meta'              => 'array',
        'variation'         => 'array',
        'image_url'         => 'array',
        'video_url'         => 'string',
        'featured'          => 'array'
    ];
}
