<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'categories';
    public $timestamps    = true;
    protected $dates      = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts      = [
        'parent_id'      => 'integer',
        'slug'           => 'string',
        'image_url'      => 'array',
        'description'    => 'string',
        'localization'   => 'array',
        'options'        => 'array',
        'meta'           => 'array'
    ];




    public function product()
    {
        return $this->belongsToMany('App\Product');
    }

    public function categories()
    {
        return $this->hasOne('App\Category');
    }

    public function parent()
    {
        return $this->hasOne('App\Category', 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany('App\Category', 'id', 'parent_id');
    }
}
