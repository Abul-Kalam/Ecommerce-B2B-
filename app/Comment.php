<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'comments';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];


    protected $casts      = [
        'parent_id'       => 'integer',
        'user_id'         => 'integer',
        'message'         => 'string'
    ];
}
