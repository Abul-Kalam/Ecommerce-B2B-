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
        'localization'     => 'array',
        'status'           => 'string',
        'description'      => 'string',
        'cost_price'       => 'float',
        'regular_price'    => 'float',
        'mr_price'         => 'float',
        'sale_price'       => 'float',
        'pack_price'       => 'float',
        'sku'              => 'string',
        'meta'             => 'array',
        'image_url'        => 'array',
        'likes'            => 'string',
        'manage_stock'     => 'string',
        'sold_individually'=> 'string',
        'link_products'    => 'string',
        'featured'         => 'array'
    ];
}
