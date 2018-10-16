<?php

namespace App\Http\Controllers\Api;

use Session;
use App\District;
use App\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        
        $paginate = config('app.pagenation_count', 15);
        
        $districts = District::with('division')->orderBy('created_at', 'DESC')->paginate($paginate);

        // return view('backend.pages.district-list' ,[
        //     'districts' => $districts,
        // ]);

        return response()->json([
            'districts' => $districts,
            'massage' =>'Countries Successfully Store  Update'
        ], 200);
    }


    public function search(Request $request)
    {
        $keywords = $request->input('keywords');

        $districts = District::where('localization->en->display_name', 'like', '%'.$keywords.'%')
        ->orWhere('localization->bn->display_name', 'like', '%'.$keywords.'%')->paginate(5);

        return view('backend.pages.district-list', [
            'districts' => $districts
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
            'slug' => 'required|unique:districts|max:255',
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'division-id' => 'required'
        ]);
        
        $district = new District();
        
        $display_name_en = $request->input('display-name-en');

        $district->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
       
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));


        $district->slug  = $slug;
        $district->division_id  = $request->input('division-id');

      

        $district->save();
        return response()->json([
            'massage' =>'Countries Successfully Store'
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
       
        
        $district = District::findOrFail($id);
        $divisions = Division::get();
        return view('backend.pages.district-edit', [
            'divisions' => $divisions,
            'district' => $district,
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
            'slug' => 'required|max:255|unique:districts,id,'.$id,
            'display-name-en' => 'required|max:255',
            'display-name-bn' => 'required|max:255',
            'division-id' => 'required'
        ]);
        
        $district = District::findOrFail($id);
        
        $display_name_en = $request->input('display-name-en');

        $district->localization     = [
            'en' => [
                'display_name' => strtolower($display_name_en),
            ],
            'bn' => [
                'display_name' => $request->input('display-name-bn')
            ]
        ];
       
        
        $slug = $request->input('slug');

        $slug = preg_replace('/\s+/u', '-', trim($slug));


        $district->slug  = $slug;
        $district->division_id  = $request->input('division-id');

      

        $district->save();
        return response()->json([
            'massage' =>'Countries Successfully Update'
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
