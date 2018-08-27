<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'orders';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];


    protected $casts      = [
        'user_id'            => 'integer',
        'shipping_address'   => 'string',
        'billing_address'    => 'string'
    ];
}
