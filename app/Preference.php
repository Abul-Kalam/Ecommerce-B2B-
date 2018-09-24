<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    const CREATED_AT      = 'created_at';
    const UPDATED_AT      = 'updated_at';

    protected $table      = 'preferences';
    public $timestamps    = true;
    // protected $dateFormat = 'U';
    protected $dates      = ['created_at', 'updated_at'];

    protected $fillable = ['name', 'value', 'description'];

    protected $casts      = [
        'name'           => 'string',
        'value'          => 'string'
    ];

    public static function getValue($name)
    {
        $data = self::where('name', $name)->first();
        return $data['value'];
    }

    public static function setValue($name, $value)
    {
        self::where('name', $name)->update(['value' => $value]);
    }
}
