<?php

namespace App\Http\Controllers\Api;

use Session;
use App\District;
use App\Thana;
use Illuminate\Http\Request;

class ThanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    
        $paginate = config('app.pagenation_count', 17);
        
        $thanas = Thana::with('district')->orderBy('created_at', 'DESC')->paginate($paginate);

        return response()->json([
            'thanas' => $thanas,
            'massage' =>'Thana Successfully Created '
        ], 200);
    }

    
    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $keywords = strtolower($keywords);

        $thanas = Thana::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.thana-list', [
            'thanas' => $thanas
        ]);
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
            'slug' => 'required|unique:thanas|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'district-id' => 'required'
        ]);
        
        $thana = new Thana();
        
        $display_name_en = $request->input('display-name-en');
        $thana->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));


        $thana->slug  = $slug;
        
        $thana->district_id  = $request->input('district-id');

      

        $thana->save();
        return response()->json([
            'massage' =>'Thanas Successfully Created '
        ], 200);
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
    
        $thana = Thana::findOrFail($id);
        $districts = District::get();
        return view('backend.pages.thana-edit', [
            'districts' => $districts,
            'thana' => $thana,
        ]);
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
        $request->validate([
            'slug' => 'required|max:255|unique:thanas,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'district-id' => 'required'
        ]);
        
        $thana = Thana::findOrFail($id);
        
        $display_name_en = $request->input('display-name-en');
        $thana->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
       
        
        $slug = $request->input('slug');
        $slug = preg_replace('/\s+/u', '-', trim($slug));

        $thana->slug  = $slug;
        $thana->district_id  = $request->input('district-id');

      

        $thana->save();
        
        return response()->json([
            'massage' =>'Thanas Successfully Update '
        ], 200);
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
