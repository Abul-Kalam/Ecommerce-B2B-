<?php

namespace App\Http\Controllers;

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
        $this->checkPermission('read-district');
        
        $paginate = config('app.pagenation_count', 15);
        
        $districts = District::with('division')->orderBy('created_at', 'DESC')->paginate($paginate);

        return view('backend.pages.district-list' ,[
            'districts' => $districts,
        ]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $this->checkPermission('create-district');
        
        $divisions = Division::get();
        return view('backend.pages.district-create' , [
            'divisions' => $divisions,
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
        Session::flash('message', 'Successfully Created!');
        return redirect()->route('backend.districts.edit', $district->id);
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
        $this->checkPermission('update-district');
        
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
        Session::flash('message', 'Successfully Update!');
        return redirect()->route('backend.districts.edit', $district->id);
        
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
