<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'media';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'title'           => 'string',
        'paths'           => 'array',
        'caption'         => 'string',
        'type'            => 'string'
    ];
}
