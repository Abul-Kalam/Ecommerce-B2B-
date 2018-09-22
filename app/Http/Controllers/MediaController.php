<?php

namespace App\Http\Controllers;

use Session;
use App\Media;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkPermission('read-media');

        $paginate = config('app.pagenation_count', 10);
        
        $media = Media::orderBy('created_at', 'DESC')->paginate($paginate);
        
        return view('backend.pages.media-list', [
            'media' => $media
        ]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $media = Media::where('title', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.media-list', [
            'media' => $media
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('create-media');
        return view('backend.pages.media-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            //'title' => 'required|max:255',
            // 'media' => 'required|file mimes:xlsx,xls,csv,jpg,jpeg,png,bmp,doc,docx,pdf,tif,tiff,mp4,mov,ogg,qt'
        ]);
            $media = new Media();
        

            

            // if ($request->hasFile('file')) {
                
            //     // $media->caption  = $request->input('caption');
            //     $file = $request->file('file');
            //     $file_type = substr($file->getMimeType(), 0, 5);
            //     $originalName = $file->getClientOriginalName();
            //     $media->type  = $file_type;

            //     $media->title  = $originalName;
            //     $nowtime = Carbon::now();
            //     $year =  $nowtime->year;
            //     $month = $nowtime->month;
            //     $day = $nowtime->day;
            //     $store_path = 'public/'.$file_type.'s/' . $year .'/' . $month . '/' .  $day;
            //     $path = $file->storeAs($store_path , $originalName);
            //     $media->paths = [
            //         'original' => $path,
            //         '48x48' => '48x48/'.$path,
            //         '256x256' => '256x256/'.$path,
            //     ];
            //     $media = Image::make($file);
            //     $media->resize(256, 256);

            //     $path = $file->storeAs($store_path, $originalName);
            //     $media->save();
                

            //     return response()->json([
            //         'media' => $media,
            //         'massage' =>'Successfully Created!'
            //     ], 200);
            // }
            
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_type = substr($file->getMimeType(), 0, 5);
                $originalName = $file->getClientOriginalName();
                $media = new Media();
    
                // $media->title  = $request->input('title');
                // $media->caption  = $request->input('caption');
                $media->title  = strtolower($originalName);
                $media->type  = $file_type;
                
                $nowtime = Carbon::now();
                $year =  $nowtime->year;
                $month = $nowtime->month;
                $day = $nowtime->day;
    
                $store_path = 'public/'.$file_type.'s/' . $year .'/' . $month . '/' .  $day;
                if ($file_type == 'image') {
                    $paths = $media->saveImage($store_path, $file);
                } else {
                    $paths = Storage::putFile($store_path, $file);
                }
    
    
                // $path = $file->storeAs($store_path, $originalName);
    
                $media->paths = $paths;
                $media->save();
                return response()->json([
                    'media' => $media,
                    'massage' =>'Successfully Created!'
                ], 200);
            }
            
    }


   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
