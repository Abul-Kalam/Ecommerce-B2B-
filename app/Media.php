<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

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

    protected $thumbSizes = [
       
        [48,48],
        [80,80],
        [256,256]
    ]; //Width, Height
    
    // public function article()
    // {
    //     return $this->morphToMany('App\Article', 'mediagable');
    // }

    public function article()
    {
        return $this->hasMany('App\Article');
    }


    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }


    

    public function saveImage($store_path, $file)
    {
        $allThumbPaths = [];

        $path = Storage::putFile($store_path, $file);
        $allThumbPaths['original'] = $path;
        
        foreach ($this->thumbSizes as $ts) {
            $w = $ts[0];
            $h = $ts[1];
            $key = $w.'x'.$h;
            $allThumbPaths[$key] = $this->createThumb($w, $h, $path);
        }
        return $allThumbPaths;
    }
    
    
    private function createThumb($width, $height, $path)
    {
        $fullPath = Storage::path($path);
        $fullPinfo = pathinfo($fullPath);
        $shortPathinfo = pathinfo($path);
        $fullFileDir = $fullPinfo['dirname'];
        $shortFileDir = $shortPathinfo['dirname'];
        $fileName = $fullPinfo['filename'];
        $fileExt = $fullPinfo['extension'];
        $extraName = '_'.$width.'x'.$height;

        $fullReSizeFilePath = $fullFileDir.'/'.$fileName.$extraName.'.'.$fileExt; // This full path is needed to up file
        
        $img = Image::make($fullPath);
        $img->fit($width, $height);
        $img->save($fullReSizeFilePath);
        $img->destroy();

        $shortReSizeFilePath = $shortFileDir.'/'.$fileName.$extraName.'.'.$fileExt; //This path for only to save in database
        return $shortReSizeFilePath;
    }
}
